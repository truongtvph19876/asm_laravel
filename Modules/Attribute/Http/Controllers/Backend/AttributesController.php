<?php

namespace Modules\Attribute\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Modules\Attribute\Models\Attribute;
use Yajra\DataTables\DataTables;

class AttributesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Attributes';

        // module name
        $this->module_name = 'attributes';

        // directory path of the module
        $this->module_path = 'attribute::backend';

        // module icon
        $this->module_icon = 'fa-solid fa-sitemap';

        // module model name, path
        $this->module_model = "Modules\Attribute\Models\Attribute";
    }

    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        $module_action = "List";

        $attributes = Attribute::where('parent_id', -1)->with('children')->get();

        return view(
            "$module_path.$module_name.index",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action', 'attributes')
        );
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['parent_id'] = $request->parent_id != null ? $request->parent_id : -1;
        Attribute::create($data);
        return redirect("admin/$this->module_name");
    }

    public function index_data()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $page_heading = label_case($module_title);
        $title = $page_heading.' '.label_case($module_action);

        $$module_name = $module_model::select('id', 'name', 'parent_id', 'value', 'updated_at');

        $data = $$module_name;

        return Datatables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('name', '<strong>{{$name}}</strong>')
            ->editColumn('updated_at', function ($data) {
                $module_name = $this->module_name;

                $diff = Carbon::now()->diffInHours($data->updated_at);

                if ($diff < 25) {
                    return $data->updated_at->diffForHumans();
                } else {
                    return $data->updated_at->isoFormat('llll');
                }
            })
            ->rawColumns(['name', 'action'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }

    public function delete(Attribute $attribute)
    {
        $attribute->delete();
    }

}
