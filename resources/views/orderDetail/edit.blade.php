<form action="{{ route('orderDetail.update', ['order_id' => $order_detail->order_id, 'product_id' => $order_detail->product_id]) }}" method="POST">

    @csrf
    @method('PUT')

    <label for="order_id">Order ID:</label>
    <input type="number" name="order_id" value="{{old('order_id', $order_detail->order_id)}}" readonly>


    <label for="product_id">Product ID:</label>
    <input type="number" name="product_id" value="{{old('product_id', $order_detail->product_id)}}" readonly>

    <lable for="name">Tên sản phẩm</lable>
    <input type="text" name="name" value="{{old('name', $order_detail->name)}}">

    <lable for="price">Giá sản phẩm</lable>
    <input type="number" name="price" value="{{old('price', $order_detail->price)}}">

    <lable for="discount">Giá sản phẩm</lable>
    <input type="number" name="discount" value="{{old('discount', $order_detail->discount)}}">

    <button type="submit">Cập nhật</button>
</form>
@endsection
