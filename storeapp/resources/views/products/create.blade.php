@extends('products.layout')
@section('content')
<div class="card">
  <div class="card-header">ADD PRODUCT</div>
  <div class="card-body">
      
      <form action="{{ url('product') }}" method="post">
        {!! csrf_field() !!}
        <label>Product Code</label></br>
        <input type="text" name="prod_code" id="fname" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="prod_name" id="lname" class="form-control"></br>
        <label>Category</label></br>
        <input type="text" name="catego_id" id="address" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="prod_price" id="phone" class="form-control"></br>        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop