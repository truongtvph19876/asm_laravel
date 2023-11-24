<?php

namespace Modules\Product\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Modules\Product\Models\Product;

class ProductsController extends BackendBaseController
{
    use Authorizable;

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
        $new_product = $request->all();

        $path_image = '';
        if ($request->hasFile('product_image')) {
            $path = "assets/images/products/";
            $file_name = time().".".$request->product_image->getClientOriginalExtension();
            $request->file('product_image')->move($path, $file_name);
            $path_image = $path . $file_name;
        }

        Product::create([
            ...$new_product,
            'product_slug' => $request->product_slug . "-" . time(),
            'product_image' => $path_image,
        ]);

        return redirect("admin/$this->module_name");
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product) {
            $product_update = $request->all();

            if ($request->hasFile('product_image')) {
                $path = "assets/images/products/";
                $file_name = time().".".$request->product_image->getClientOriginalExtension();
                $request->file('product_image')->move($path, $file_name);
                $product_update['product_image'] = $path.$file_name;
            }
            $product->update($product_update);
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
