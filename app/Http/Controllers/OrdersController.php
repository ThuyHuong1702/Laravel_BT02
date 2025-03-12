<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = DB::table('orders')->paginate(2);
        return view('orders.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Lấy danh sách nhân viên và khách hàng để hiển thị trong dropdown
        $employees = DB::table('employees')->pluck('employee_id');
        $customers = DB::table('customers')->pluck('customer_id');

        return view('orders.create', compact('employees', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Kiểm tra dữ liệu đầu vào
        $request->validate([
            'employee_id' => 'required|integer|exists:employees,employee_id',
            'customer_id' => 'required|integer|exists:customers,customer_id',
            'order_days' => 'required|date',
            'order_address' => 'required|string|max:50',
        ]);

        // Thêm mới đơn hàng
        DB::table('orders')->insert([
            'order_id' => $request->order_id,
            'employee_id' => $request->employee_id,
            'customer_id' => $request->customer_id,
            'order_days' => $request->order_days,
            'order_address' => $request->order_address,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('orders.index')->with('success', 'Thêm đơn hàng thành công!');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
