@extends('products.layout')
@section('content')
<div class="card">
  <div class="card-header">Product Details</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Product Code : {{ $products->prod_code }}</h5>
        <h5 class="card-title">Name : {{ $products->prod_name }}</h5>
        <p class="card-text">Category: {{ $products->catego_id }}</p>
        <p class="card-text">Price : {{ $products->prod_price }}</p>        
  </div>
      
    </hr>
  
  </div>
</div>

@stop