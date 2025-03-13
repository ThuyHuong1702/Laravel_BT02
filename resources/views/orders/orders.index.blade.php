@extends('layouts.appIndex')

@section('title', 'Danh sách đơn hàng')

@section('content')
<!-- Form tìm kiếm -->
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
                <th>Mã đơn hàng</th>
                <th>Tên khách hàng</th>
                <th>Thời gian đặt</th>
                <th>Nhân viên phụ trách</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->order_id }}</td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->order_date }}</td>
                    <td>{{ $order->employee_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Hiển thị nút chuyển trang -->
    {{ $orders->links('pagination::bootstrap-5') }}
@endif
@endsection
