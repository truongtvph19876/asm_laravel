@extends('frontend.layouts.app')

@section('title') {{ __($module_title) }} @endsection

@section('content')
    <div class="container">
        <div class="row">
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><a href="{{ route('frontend.orders.index') }}">{{ $module_name }}</a></li>
            </ul>
        </div>
    </div>
    <div class=" container">
        <h2 class="text-center">Đơn hàng</h2>
        <table class="table table--line wishlists-table">
            <thead class="table-thead">
            <tr class="row">
                <th class="col-md-1">STT</th>
                <th class="col-md-1">Image</th>
                <th class="col-md-6">Name</th>
                <th class="col-md-1">Quantity</th>
                <th class="col-md-1">Total price</th>
                <th class="col-md-2">Trạng thái</th>
            </tr>
            </thead>
            <tbody class="table-tbody">
                @forelse($$module_name as $index => $order)
                    <tr class="row">
                        <td class="col-md-1">{{ $index+1 }}</td>
                        <td class="col-md-1"><img src="{{ Storage::url($order->product->product_image) }}" alt="" style="width: 100%;"></td>
                        <td class="col-md-6">{{ $order->product_name }}</td>
                        <td class="col-md-1">{{ $order->quantity }}</td>
                        <td class="col-md-1">{{ $order->quantity * $order->unit_price }}</td>
                        <td class="col-md-2">
                            @php
                                $red_flag = [1, 6, 7];
                                $status_html = '';
                                if (in_array($order->status->id, $red_flag)) {
                                    $status_html = "<p class='badge' style='background: red'>".$order->status->status."</p><p></p>";
                                } else {
                                    $status_html = "<p class='badge' style='background: green'>".$order->status->status."</p><p></p>";
                                }
                            @endphp
                            {!! $status_html !!}
                            <a href="{{ route('frontend.orders.show', $order) }}" class="btn btn-primary">Chi tiết</a>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="20" class="text-center"><h2>Không có đơn hàng nào</h2><a href="/" class="btn">Mua hàng</a></td></tr>
                @endforelse
            </tbody>
        </table>
        {{ $$module_name->render() }}
    </div>
@endsection
