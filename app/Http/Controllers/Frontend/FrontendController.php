<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Modules\Brand\Models\Brand;
use Modules\Order\Http\Requests\OrderRequest;
use Modules\Order\Models\Order;
use Modules\Product\Models\Product;
use function Symfony\Component\String\s;

class FrontendController extends Controller
{
    private $order_request;
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->order_request = new OrderRequest();
    }

    public function index()
    {
        //SELECT * FROM `products` WHERE id IN (SELECT product_id FROM `orders` GROUP BY product_id ORDER BY COUNT(product_id) DESC)
        $product_feature = Product::query()->get();

        $product_bestseller = Product::select('*')
            ->whereIn('id', function($query) {
                $query->select('product_id')
                    ->from('orders')
                    ->groupBy('product_id')
                    ->orderByRaw('COUNT(product_id) desc')
                    ->get();
            })
            ->get();

        $product_latest = Product::query()->orderBy('created_at', 'ASC')->paginate(10);
        $brands = Brand::query()->get()->whereNotIn('id', 1);
        return view('frontend.index',
            compact('product_feature', 'product_bestseller', 'product_latest',
                'brands'));
    }

    public function list_product(Request $request) {

        $brands = Brand::query()->whereNotIn('id', [1])->get();
        $products = Product::query()->paginate();
        $brand_filter = Brand::query()
            ->where('brand_name', '=', $request->query('brand'))
            ->first();

        if ($brand_filter) {
            $products = Product::query()
                ->where('brand_id', [$brand_filter->id])
                ->paginate();
        }
        elseif ($request->query('search') != '') {
            $products = Product::query()
                ->where('product_name', 'LIKE', "%".$request->query('search')."%")
                ->paginate();
        }

        return view('frontend.list_index',
            compact('brands', 'products', 'brand_filter'));
    }


    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        return view('frontend.privacy');
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        return view('frontend.terms');
    }

    public function cart(Request $request) {

        $product = Product::find($request->product_id);
        if ($product) {
            $old_cart = \session()->get('cart', []);
            $new_cart = [
                $product,
                ...$old_cart,
            ];
            $request->session()->put('cart', $new_cart);
            return response()->json(Session::get('cart'));
        }
        else
            return response()->json('Something is error');
    }

    public function destroyCart($id, Request $request) {
        $cartIndex = $id;
        $carts = Session::get('cart');
        unset($carts[$cartIndex]);
        $new_cart = array_values($carts);
        $request->session()->put('cart', $new_cart);
        return response()->json(Session::get('cart'));
    }

    public function order($product) {

        $product = Product::find($product);
        if (!$product) $product = [];

        return view('frontend.orders.index', compact('product'));
    }

    public function storeOrder(Request $request) {

        if (!Auth::check()) {
            return back()
                ->with(['error'=>"<span class='text-danger'>Vui lòng đăng nhập để mua hàng</span> <a href='".route('login')."' class='text-info'>Đăng nhập</a>"]);
        }

        $request->validate(
            $this->order_request->rules(),
            $this->order_request->messages()
        );

        $product = Product::find($request->product_id);

        $order['product_id'] = $product->id;
        $order['user_id'] = auth()->user()->id ?? -1;
        $order['product_name'] = $product->product_name;
        $order['unit_price'] = $product->product_price;

        $order['quantity'] = $request->quantity;
        $order['recipient_name'] = $request->recipient_name;
        $order['recipient_phone'] = $request->recipient_phone;
        $order['recipient_city'] = $request->city;
        $order['recipient_district'] = $request->district;
        $order['recipient_ward'] = $request->ward;
        $order['recipient_detail_address'] = $request->detail_address;
        $order['note'] = $request->note;
        $order['payment_id'] = $request->payment_method;
        $order['status_id'] = 2;

        $newOrder = Order::create($order);
        $product->product_quantity -= $order['quantity'];
        $product->save();

        if ($newOrder)
            return redirect()->route('frontend.orders.index');
        else
            return back()->with(['error' => 'Đơn hàng bị lỗi']);

    }
}
