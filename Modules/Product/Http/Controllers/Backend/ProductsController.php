<?php

namespace Modules\Product\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        $module_name_singular = \Illuminate\Support\Str::singular($this->module_name);
        $module_action = 'List';
        $products = Product::query()->paginate();
        return view(
            "$module_path.$module_name.index",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    public function store(Request $request)
    {
        dd($request->all());
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
