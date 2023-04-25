@extends('customers.layout')
@section('content')
<div class="card">
  <div class="card-header">Customer Page</div>
  <div class="card-body">
      
      <form action="{{ url('customer') }}" method="post">
        {!! csrf_field() !!}
        <label>First Name</label></br>
        <input type="text" name="custo_fname" id="fname" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="custo_lname" id="lname" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="custo_address" id="address" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="custo_phone" id="phone" class="form-control"></br>        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop