@extends('orders.layout')
@section('content')
<div class="card">
  <div class="card-header">Orders Page</div>
  <div class="card-body">
      
      <form action="{{ url('order') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="ord_name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="ord_address" id="address" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="ord_phone" id="phone" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="ord_email" id="email" class="form-control"></br>
        <label>Date</label></br>
        <input type="datetime-local" name="ord_date" id="date" class="form-control"></br>
        <label>Total</label></br>
        <input type="text" name="ord_total" id="total" class="form-control"></br>        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop