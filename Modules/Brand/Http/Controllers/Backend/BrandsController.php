<?php

namespace Modules\Brand\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Modules\Brand\Models\Brand;

class BrandsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Brands';

        // module name
        $this->module_name = 'brands';

        // directory path of the module
        $this->module_path = 'brand::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Brand\Models\Brand";
    }

    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = $module_model::latest()->paginate();

        logUserAccess($module_title . ' ' . $module_action);

        return view(
        // $module_path.$module_name.index
            "$module_path.$module_name.index",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    public function store(Request $request)
    {
        $newBrand = $request->all();
        $imagePath = '';
        if ($request->hasFile('brand_logo')) {
            $path = "assets/images/brands/";
            $logo_name = time() . "." . $request->brand_logo->getClientoriginalExtension();
            $request->file('brand_logo')->move($path, $logo_name);
            $imagePath = $path . $logo_name;
        }
        Brand::create([
            ...$newBrand,
            'brand_logo' => $imagePath,
        ]);

        return redirect("admin/$this->module_name");
    }
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);

        if ($brand) {
            $brand_update = $request->all();

            if ($request->hasFile('brand_logo')) {
                $path = 'assets/brands/';
                $file_name = time() . ".". $request->brand_logo->getClientOriginalExtension();
                $request->file('brand_logo')->move($path, $file_name);
                $brand_update['brand_logo'] = $path . $file_name;
            }

            $brand->update($brand_update);
        }

        return redirect("admin/$this->module_name");
    }


}
