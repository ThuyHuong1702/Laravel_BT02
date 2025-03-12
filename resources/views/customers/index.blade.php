@extends('layouts.appIndex')

@section('title', 'Danh sách đơn hàng')

@section('content')
<a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Thêm mới khách hàng</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Phone</th>
            <th colspan="2">Hành động</th>
        </tr>
    </thead>
<tbody>
    @foreach($customer as $cus)
    <tr>
        <td>{{ $cus->customer_id }}</td>
        <td>{{ $cus->name }}</td>
        <td>{{ $cus->email }}</td>
        <td>{{ $cus->phone }}</td>
        <td>
            <a href="{{ route('customers.edit', $cus->customer_id) }}">Sửa</a>
        </td>
        <td>
            <form action="{{ route('customers.destroy', $cus->customer_id) }}" method="POST" onsubmit="return confirm('Bạn có chắc muốn xóa không?');">
                @csrf
                @method('DELETE')
                <button type="submit">Xóa</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
<!-- Hiển thị nút chuyển trang -->
{{ $customer->links('pagination::bootstrap-5') }}
@endsection

