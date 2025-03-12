@extends('layouts.appCreate')

@section('title', 'Thêm mới khách hàng')

@section('content')

<form action="{{ route('orders.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="order_id" class="form-label">Mã đơn hàng</label>
        <input type="numeric" name="order_id" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="employee_id" class="form-label">Nhân viên:</label>
        <select name="employee_id" class="form-control" required>
            <option value="">-- Chọn nhân viên --</option>
            @foreach($employees as $id)
                <option value="{{ $id }}">{{ $id }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="customer_id" class="form-label">Khách hàng:</label>
        <select name="customer_id" class="form-control" required>
            <option value="">-- Chọn khách hàng --</option>
            @foreach($customers as $id)
                <option value="{{ $id }}">{{ $id }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="order_days" class="form-label">Ngày đặt hàng:</label>
        <input type="date" name="order_days" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="order_address" class="form-label">Địa chỉ:</label>
        <input type="text" name="order_address" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Thêm đơn hàng</button>

    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Quay lại</a>
</form>

@endsection
