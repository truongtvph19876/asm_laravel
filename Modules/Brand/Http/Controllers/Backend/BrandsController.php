<?php

namespace Modules\Brand\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Modules\Brand\Http\Requests\BrandRequest;
use Modules\Brand\Models\Brand;
use Illuminate\Support\Facades\Storage;

class BrandsController extends BackendBaseController
{
    use Authorizable;
    private $brand_request;

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

        // khởi tạo request cho brand
        $this->brand_request = new BrandRequest();
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

    public function show($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $$module_name_singular = $module_model::findOrFail($id);

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return view(
            "$module_path.$module_name.show",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
        );
    }

    public function store(Request $request)
    {
        $request->validate(
            $this->brand_request->rules(),
            $this->brand_request->messages());

        $newBrand = $request->all();

        if ($request->hasFile('brand_logo')) {

            $logo_name = time() . "_" . $request->brand_logo->getClientoriginalName();
            $newBrand['brand_logo'] = $request
                ->file('brand_logo')->storeAs('brands', $logo_name, 'public');
        }

        Brand::create($newBrand);

        return redirect("admin/$this->module_name");
    }
    public function update(Request $request, $id)
    {

        $request->validate([
                ...$this->brand_request->rules(),
                'brand_name' => ['required',
                    \Illuminate\Validation\Rule::unique($this->module_name)->ignore($id),
                    'min:3'],
            ], $this->brand_request->messages());

        $brand = Brand::find($id);

        if ($brand) {
            $brand_update = $request->all();

            if ($request->hasFile('brand_logo')) {
                $file_name = time() . ".". $request->brand_logo->getClientOriginalName();
                $brand_update['brand_logo'] = $request->file('brand_logo')
                    ->storeAs('brands', $file_name, 'public');

                if (Storage::exists("public/".$brand->brand_logo)){
                    Storage::delete("public/".$brand->brand_logo);
                }
            }

            $brand->update($brand_update);
        }

        return redirect("admin/$this->module_name");
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);
        if ($brand) {
            if (Storage::exists("public/".$brand->brand_logo)){
                Storage::delete("public/".$brand->brand_logo);
            }
            $brand->delete();
        }

        return redirect("admin/$this->module_name");
    }

}
