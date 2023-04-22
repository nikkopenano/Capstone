@extends('orders.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Order</div>
  <div class="card-body">
      
      <form action="{{ url('order/' .$orders->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$orders->id}}" id="id" />
        <label>Customer Name</label></br>
        <input type="text" name="ord_name" id="name" value="{{$orders->ord_name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="ord_address" id="address" value="{{$orders->ord_address}}" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="ord_phone" id="phone" value="{{$orders->ord_phone}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="ord_email" id="email" value="{{$orders->ord_email}}" class="form-control"></br>
        <label>Date</label></br>
        <input type="text" name="ord_date" id="email" value="{{$orders->ord_date}}" class="form-control"></br>
        <label>Total</label></br>
        <input type="text" name="ord_total" id="email" value="{{$orders->ord_total}}" class="form-control"></br>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop