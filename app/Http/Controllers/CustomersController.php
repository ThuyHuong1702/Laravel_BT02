<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCustomersRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = DB::table('customers')->paginate(2);
        return view('customers.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create'); // Trả về view chứa form
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomersRequest $request)
    {
        $data = $request->validated();
        // Lưu dữ liệu vào database
         // Lưu vào database (ví dụ với Query Builder)
         DB::table('customers')->insert($data);

         return redirect()->route('customers.create')->with('success', 'Khách hàng đã được thêm thành công!');
    }

    /**
     * Display the specified resource.
     */
    /*
    public function show(string $id)
    {

    }*/

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $customer = DB::table('customers')->where('customer_id', $id)->first();
        return view('customers.edit', compact('customer'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, $id)
    {
        // Kiểm tra khách hàng có tồn tại không
        $customer = DB::table('customers')->where('customer_id', $id)->first();
        if (!$customer) {
            return redirect()->back()->with('error', 'Khách hàng không tồn tại.');
        }

        // Cập nhật dữ liệu
        DB::table('customers')
            ->where('customer_id', $id)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone')
            ]);

        return redirect()->route('customers.index')->with('success', 'Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Xóa khách hàng
        DB::table('customers')->where('customer_id', $id)->delete();

        return redirect()->route('customers.index')->with('success', 'Khách hàng đã được xóa thành công!');
    }
}
