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
            <div class="col">
                <div class="row mt-4">
                    <div class="col">
                        @foreach ($attributes as $attribute)
                            <div class="d-flex w-100 shadow-sm p-3 rounded border mb-1 justify-content-between">
                                <b>{{ $attribute->name }}</b>
                                <div class="">
                                    <a href='{!! route("backend.$module_name.edit", $attribute) !!}' class='btn btn-sm btn-primary mt-1' data-toggle="tooltip"
                                       title="Edit {{ ucwords(Str::singular($module_name)) }}"><i
                                            class="fas fa-wrench"></i></a>
                                    <a href='{!! route("backend.$module_name.show", $attribute) !!}' class='btn btn-sm btn-success mt-1' data-toggle="tooltip"
                                       title="Show {{ ucwords(Str::singular($module_name)) }}"><i class="fas fa-tv"></i></a>
                                    <form action="{{ route("backend.$module_name.destroy", $attribute) }}" method="POST" class='btn btn-sm btn-danger mt-1'>
                                        @csrf
                                        @method('DELETE')
                                        <button class="fa-solid fa-trash bg-transparent border-0"></button>
                                    </form>
                                </div>
                            </div>
                            @if (count($attribute->children))
                                @include('attribute::partials.child', ['children' => $attribute->children])
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-7">
                <div class="float-left">
{{--                    Total {{ $$module_name->total() }} {{ ucwords($module_name) }}--}}
                </div>
            </div>
            <div class="col-5">
                <div class="float-end">
{{--                    {!! $$module_name->render() !!}--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
