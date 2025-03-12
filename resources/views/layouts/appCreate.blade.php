<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Thêm mới')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    {{-- Thanh điều hướng --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{route('customers.index')}}">Customer</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('orders.index')}}">Orders</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('orderDetail.index')}}">Order detail</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Nội dung chính --}}
    <div class="container mt-4">
        <h2 class="text-center">@yield('title', 'Thêm mới')</h2>

        {{-- Form nhập liệu --}}
        <div class="card">
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <footer class="text-center mt-4 p-3 bg-light">
        <p>&copy; 2024 Quản lý hệ thống</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
