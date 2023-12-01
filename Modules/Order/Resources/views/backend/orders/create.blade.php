@extends('backend.layouts.app')

@section('title') {{ __($module_action) }} {{ __($module_title) }} @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item route='{{route("backend.$module_name.index")}}' icon='{{ $module_icon }}'>
        {{ __($module_title) }}
    </x-backend-breadcrumb-item>
    <x-backend-breadcrumb-item type="active">{{ __($module_action) }}</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{ html()->label('Nhập ID hoặc tên sản phẩm', 'product_key') }}
            {{ html()->input('text', 'product_key')->id('product_key')->placeholder('Nhập ID hoặc tên sản phẩm')->class('form-control') }}
            {{ html()->button('Tìm')->id('find_product')->class('btn btn-success mt-3') }}
        </div>
    </div>
@endsection

<script>

</script>
