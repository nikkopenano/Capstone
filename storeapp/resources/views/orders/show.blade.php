@extends('orders.layout')
@section('content')
<div class="card">
  <div class="card-header">Orders Details</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $orders->ord_name }}</h5>
        <h5 class="card-title">Address : {{ $orders->ord_address }}</h5>
        <p class="card-text">Phone : {{ $orders->ord_phone }}</p>
        <p class="card-text">Email : {{ $orders->ord_email }}</p>
        <p class="card-text">Date : {{ $orders->ord_date }}</p>
        <p class="card-text">Total : {{ $orders->ord_total }}</p>        
  </div>
      
    </hr>
  
  </div>
</div>

@stop