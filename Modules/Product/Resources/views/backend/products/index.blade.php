@extends('backend.layouts.app')

@section('title') {{ __($module_action) }} {{ __($module_title) }} @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item type="active" icon='{{ $module_icon }}'>{{ __($module_title) }}</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">

        <x-backend.section-header>
            <i class="{{ $module_icon }}"></i> {{ __($module_title) }} <small class="text-muted">{{ __($module_action) }}</small>

            <x-slot name="subtitle">
                @lang(":module_name Management Dashboard", ['module_name'=>Str::title($module_name)])
            </x-slot>
            <x-slot name="toolbar">
                @can('add_'.$module_name)
                <x-buttons.create route='{{ route("backend.$module_name.create") }}' title="{{__('Create')}} {{ ucwords(Str::singular($module_name)) }}" />
                @endcan

                @can('restore_'.$module_name)
                <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-cog"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href='{{ route("backend.$module_name.trashed") }}'>
                                <i class="fas fa-eye-slash"></i> @lang("View trash")
                            </a>
                        </li>
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li> -->
                    </ul>
                </div>
                @endcan
            </x-slot>
        </x-backend.section-header>

        <div class="row mt-4">
            <div class="row mb-3">
                <form action="{{ route("backend.$module_name.search") }}" method="POST">
                    @csrf
                    <div class="d-flex gap-2">
                        <input placeholder="Enter Name" name="nameSearch" class="form-control">
                        <button class="btn btn-success">Search</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <table id="datatable" class="table table-bordered table-hover table-responsive-sm">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                @lang("product::text.image")
                            </th>
                            <th>
                                @lang("product::text.name")
                            </th>
                            <th>
                                @lang("product::text.brand")
                            </th>
                            <th>
                                @lang("product::text.price")
                            </th>
                            <th>
                                @lang("product::text.quantity")
                            </th>
                            <th class="text-end">
                                @lang("product::text.action")
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($$module_name as $module_name_singular)
                        <tr>
                            <td>
                                {{ $module_name_singular->id }}
                            </td>
                            <td>
                                <img srcset="{{ asset($module_name_singular->product_image) }} 10x" alt="">
                            </td>
                            <td>
                                <a href="{{ url("admin/$module_name", $module_name_singular->id) }}">{{ $module_name_singular->product_name }}</a>
                            </td>
                            <td class="w-25">
                                {{ $module_name_singular->brand->brand_name }}
                            </td>
                            <td>
                                {{ $module_name_singular->product_price }}
                            </td>
                            <td>
                                {{ $module_name_singular->product_quantity }}
                            </td>
                            <td class="text-end">
                                <a href='{!!route("backend.$module_name.edit", $module_name_singular)!!}' class='btn btn-sm btn-primary mt-1' data-toggle="tooltip" title="Edit {{ ucwords(Str::singular($module_name)) }}"><i class="fas fa-wrench"></i></a>
                                <a href='{!!route("backend.$module_name.show", $module_name_singular)!!}' class='btn btn-sm btn-success mt-1' data-toggle="tooltip" title="Show {{ ucwords(Str::singular($module_name)) }}"><i class="fas fa-tv"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    Total {{ count($products) }}
                </div>
            </div>
            <div class="col-5">
                <div class="float-end">
{{--                    {!! $products->render() !!}--}}
                    hello
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
