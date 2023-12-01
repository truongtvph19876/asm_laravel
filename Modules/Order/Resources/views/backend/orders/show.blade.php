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
    <p>
        @lang("Chi tiết đơn hàng :module_name (Id: :id)", ['module_name'=>ucwords($module_name_singular), 'id'=>$$module_name_singular->id])
    </p>
    <table class="table table-responsive-sm table-hover table-bordered">
        <?php
        $all_columns = $$module_name_singular->getTableColumns();
        ?>
        <thead>
        <tr>
            <th scope="col">
                <strong>
                    @lang('Name')
                </strong>
            </th>
            <th scope="col">
                <strong>
                    @lang('Value')
                </strong>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($all_columns as $column)
            <tr>
                <td>
                    <strong>
                        {{ __(label_case($column->Field)) }}
                    </strong>
                </td>
                <td>

                    @if($column->Field == 'status_id')
                        @php
                            $status = \Modules\Order\Entities\OrderStatus::query()->get();
                            $options = [];
                            foreach ($status as $option) {
                                $options[$option->id] = $option->status;
                            }
                        @endphp
                        <form action="{{ route('backend.orders.update', $$module_name_singular) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-6">
                                    {{ html()->select('status_id', $options)->class('form-select')->value($$module_name_singular->status_id) }}
                                </div>
                                <div class="col-md-4">
                                    {{ html()->button('Cập nhật', 'butotn')->class('btn btn-info') }}
                                </div>
                            </div>
                        </form>
                    @else
                        {!! show_column_value($$module_name_singular, $column) !!}
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{-- Lightbox2 Library --}}
    <x-library.lightbox />
@endsection
