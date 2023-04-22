@extends('customers.layout')
@section('content')
<div class="card">
  <div class="card-header">Customer details</div>   
  <div class="card-body">

        <h5 class="card-title">First Name : {{ $customers->custo_fname }}</h5>
        <h5 class="card-title">Last Name : {{ $customers->custo_lname }}</h5>
        <p class="card-text">Address : {{ $customers->custo_address }}</p>
        <p class="card-text">Phone : {{ $customers->custo_phone }}</p>       
  </div>
      
    </hr>
  
  </div>
</div>

@stop