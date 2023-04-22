@extends('customers.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Customers </div>
  <div class="card-body">
      
      <form action="{{ url('customer/' .$customers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$customers->id}}" id="id" />
        <label>First Name</label></br>
        <input type="text" name="custo_fname" id="name" value="{{$customers->custo_fname}}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="custo_lname" id="name" value="{{$customers->custo_lname}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="custo_address" id="address" value="{{$customers->custo_address}}" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="custo_phone" id="phone" value="{{$customers->custo_phone}}" class="form-control"></br>        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop