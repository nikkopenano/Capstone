@extends('products.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Product</div>
  <div class="card-body">
      
      <form action="{{ url('product/' .$products->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
        <label>Product Code</label></br>
        <input type="text" name="prod_code" id="name" value="{{$products->prod_code}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="prod_name" id="name" value="{{$products->prod_name}}" class="form-control"></br>
        <label>Category</label></br>
        <input type="text" name="catego_id" id="address" value="{{$products->catego_id}}" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="prod_price" id="phone" value="{{$products->prod_price}}" class="form-control"></br>
       
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop