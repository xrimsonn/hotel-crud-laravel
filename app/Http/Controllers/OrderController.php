<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\OrderFormRequest;

class OrderController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $orders = Order::orderBy('id', 'desc')->get();
    return view('orders.index', [
      'orders' => $orders,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('orders.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(OrderFormRequest $request)
  {
    $data = $request->validated();
    Order::create($data);

    return redirect()->route('orders.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Order $order)
  {
    return view('orders.show', [
      'order' => $order,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Order $order)
  {
    return view('orders.edit', [
      'order' => $order,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(OrderFormRequest $request, Order $order)
  {
    $data = $request->validated();
    $order->update($data);

    return redirect()->route('orders.show', $order->id);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Order $order)
  {
    $order->delete();

    return redirect()->route('orders.index');
  }
}
