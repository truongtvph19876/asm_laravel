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

        $product_latest = Product::query()->orderBy('id', 'DESC')->paginate(10);
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
            $products = Brand::find($brand_filter->id)->product;
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
//        return response()->json($request->all());
//        $request->session()->put('cart', []);
//        return response()->json($request->product_id);

        $product = Product::find($request->product_id);

        if ($product) {
            if ($product->product_quantity <= 0 ) return response()->json('error');

            $cart = Session::get('cart', []);

            if (array_key_exists($request->product_id, $cart)){

                if ($request->action == 'decrement')
                    $product->cart_quantity = $cart[$request->product_id]->cart_quantity -=1;
                else
                    $product->cart_quantity = $cart[$request->product_id]->cart_quantity +=1;
            } else {
                $product->cart_quantity = 1;
            }

            if ($request->quantity) $product->cart_quantity = $request->quantity;

            $cart[$request->product_id] =$product;
            $request->session()->put('cart', $cart);
            return response()->json(Session::get('cart'));
        }
        else
            return response()->json('Something is error');
    }

    public function destroyCart($id, Request $request) {
        $carts = Session::get('cart', []);
        if (isset($carts[$id])) {
            unset($carts[$id]);
        } else {
            $carts = Session::get('cart', []);
        }
        $request->session()->put('cart', $carts);
        return response()->json(Session::get('cart'));
    }

    public function order($product) {

        define('product_id', Product::find($product)->id);
        $cart = Session::get('cart', []);
        $cartItem = array_filter($cart, function ($item) {
            return $item->id == product_id;
        });
        $cartItem = array_values($cartItem);
        $cartItem = $cartItem[0];
        if (!$cartItem) $cartItem = [];

        return view('frontend.orders.index', compact('cartItem'));
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
