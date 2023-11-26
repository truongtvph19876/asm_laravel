<?php

namespace Modules\Product\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Product\Http\Requests\ProductRequest;
use Modules\Product\Models\Product;

class ProductsController extends BackendBaseController
{
    use Authorizable;
    private $product_request;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Products';

        // module name
        $this->module_name = 'products';

        // directory path of the module
        $this->module_path = 'product::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Product\Models\Product";

        $this->product_request = new ProductRequest();
    }

    public function index()
    {
        $module_title = $this->module_title;
        $module_path = $this->module_path;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = \Illuminate\Support\Str::singular($this->module_name);
        $module_action = 'List';
        $$module_name = $module_model::query()->paginate();

        return view(
            "$module_path.$module_name.index",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    public function create()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Create';

        return view(
            "$module_path.$module_name.create",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_name_singular', 'module_action')
        );

    }

    public function store(Request $request)
    {

        $request->validate(
            $this->product_request->rules(),
            $this->product_request->messages()
        );

        $new_product = $request->all();

        if ($request->hasFile('product_image')) {
            $file_name = time()."_".$request->product_image->getClientOriginalName();
            $new_product['product_image'] = $request->file('product_image')->storeAs('products', $file_name, 'public');
        }


        Product::create([
            ...$new_product,
            'description' => htmlspecialchars($request->description),
            'product_slug' => $request->product_slug . "-" . time(),
        ]);

        return redirect("admin/$this->module_name");
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                ...$this->product_request->rules(),
                'product_image' => ''
            ],
            $this->product_request->messages()
        );

        $product = Product::find($id);
        if ($product) {
            $product_update = $request->all();

            if ($request->hasFile('product_image')) {
                $file_name = time()."_".$request->product_image->getClientOriginalName();
                $product_update['product_image'] = $request->file('product_image')->storeAs('products', $file_name, 'public');
            }
            $product->update([
               ...$product_update,
                'description' => htmlspecialchars($request->description),
            ]);
        }

        return redirect("admin/$this->module_name");
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product_image = $product->product_image;
            $product->delete();
//            if (Storage::exists("public/".$product_image)){
//                Storage::delete("public/".$product_image);
//            }
        }

        return redirect("admin/$this->module_name");
    }

    public function search(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = \Illuminate\Support\Str::singular($module_name);

        $module_action = 'List';
        if ($request->isMethod('POST')) {
            $status = $request->status;
            $user = $request->user;
            $nameSearch = $request->nameSearch;

            $query = Product::query();
            if ($status) {
                $query->where('status', $status);
            }
            if ($user) {
                $query->where('created_by', $user);
            }
            if ($nameSearch) {
                $query->where('name', 'like', '%' . $nameSearch . '%');
            }
            $$module_name = $query->latest()->paginate();
        }

        return view(
            "$module_path.$module_name.index",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action')
        );
    }
}
