<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view ('orders.index')->with('orders', $orders);
    }
 
    
    public function create()
    {
        return view('orders.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Order::create($input);
        return redirect('order')->with('flash_message', 'Order Addedd!');  
    }
 
    
    public function show($id)
    {
        $order = Order::find($id);
        return view('orders.show')->with('orders', $order);
    }
 
    
    public function edit($id)
    {
        $order = Order::find($id);
        return view('orders.edit')->with('orders', $order);
    }
 
  
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $input = $request->all();
        $order->update($input);
        return redirect('order')->with('flash_message', 'order Updated!');  
    }
 
   
    public function destroy($id)
    {
        Order::destroy($id);
        return redirect('order')->with('flash_message', 'Order deleted!');  
    }
}
