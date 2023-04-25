@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Employee details</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">First Name : {{ $employees->emplo_fname }}</h5>
        <h5 class="card-title">Last Name : {{ $employees->emplo_lname }}</h5>
        <p class="card-text">Address : {{ $employees->emplo_address }}</p>
        <p class="card-text">Phone : {{ $employees->emplo_phone }}</p>
        <p class="card-text">Email : {{ $employees->emplo_email}}</p>
        <p class="card-text">Job : {{ $employees->emplo_job }}</p>
        <p class="card-text">Status : {{ $employees->emplo_status }}</p>
  </div>
      
    </hr>
  
  </div>
</div>

@stop