@extends('layouts.appIndex')

@section('title', 'Danh sách đơn hàng')

@section('content')
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID order</th>
            <th>ID San Pham</th>
            <th>Name</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Hành động</th>
        </tr>
    </thead>
<tbody>
    @foreach($order_details as $ord)
    <tr>
        <td>{{ $ord->order_id }}</td>
        <td>{{ $ord->product_id }}</td>
        <td>{{ $ord->name }}</td>
        <td>{{ $ord->price }}</td>
        <td>{{ $ord->discount }}</td>
        <td>
            <a href="{{route('orderDetail.update')}}">Update</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
<!-- Hiển thị nút chuyển trang -->
{{ $order_details->links('pagination::bootstrap-4') }}

@endsection
