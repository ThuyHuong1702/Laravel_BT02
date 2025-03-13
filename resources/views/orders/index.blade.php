@extends('layouts.appIndex')

@section('title', 'Danh sách đơn hàng')

@section('content')
<a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Thêm mới đơn hàng</a>

<form action="{{ route('orders.search') }}" method="GET">
    @csrf
    <label for="order_date">Ngày đặt hàng:</label>
    <input type="date" name="order_date" required>

    <label for="employee_id">Mã nhân viên:</label>
    <input type="number" name="employee_id" required>

    <button type="submit">Tìm kiếm</button>
</form>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>ID Nhân viên</th>
            <th>ID Khách hàng</th>
            <th>Ngày đặt hàng</th>
            <th>Địa chỉ đặt hàng</th>
            <th>Hành động</th>
        </tr>
    </thead>
<tbody>
    @foreach($order as $ord)
    <tr>
        <td>{{ $ord->order_id }}</td>
        <td>{{ $ord->employee_id }}</td>
        <td>{{ $ord->customer_id }}</td>
        <td>{{ $ord->order_days }}</td>
        <td>{{ $ord->order_address }}</td>
    </tr>
    @endforeach
</tbody>
</table>
<!-- Hiển thị nút chuyển trang -->
{{ $order->links('pagination::bootstrap-5') }}

@endsection
