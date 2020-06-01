<?php

namespace App\Http\Controllers;

use App\Order;
use App\Status;
use Illuminate\Http\Request;
use App\Events\OrderStatusChanged;
use Illuminate\Http\Response;

class AdminOrdersController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $orders = Order::with(['customer', 'status'])->get();

        return view('admin.index', compact('orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Order $order)
    {
        return view('show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Order $order
     * @return Response
     */
    public function edit(Order $order)
    {
        $statuses = Status::all();
        $currentStatus = $order->status_id;

        return view('admin.edit', compact('order', 'statuses', 'currentStatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Order $order
     * @return Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'status_id' => 'required|numeric',
        ]);

        $order->status_id = $request->status_id;
        $order->save();

        event(new OrderStatusChanged($order));

        return back()->with('message', 'Companion Status updated successfully!');
    }
}
