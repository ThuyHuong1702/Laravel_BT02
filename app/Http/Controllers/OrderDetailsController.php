<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order_details = DB::table('order_detail')->paginate(5);
        return view('orderDetail.index', compact('order_details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($order_id, $product_id)
    {
        $order_detail = DB::table('order_details')
            ->where('order_id', $order_id)
            ->where('product_id', $product_id)
            ->first();

        // Kiểm tra dữ liệu
        dd($order_detail);

        $orders = DB::table('orders')->pluck('order_id');
        $products = DB::table('products')->pluck('product_id');

        return view('orderDetail.edit', compact('orders', 'products', 'order_detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $order_id, $product_id)
    {
        $request->validate([
            'order_id' => 'required|integer|exists:orders,order_id',
            'product_id' => 'required|integer|exists:products,product_id',
        ]);

        DB::table('order_details') // Sửa "order_detais" thành "order_details"
            ->where([
                ['order_id', '=', $order_id],
                ['product_id', '=', $product_id],
            ])
            ->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'discount' => $request->input('discount'),
            ]);

        return redirect()->route('orderDetail.index')->with('success', 'Cập nhật thành công!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
