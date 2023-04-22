@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('employee/' .$employees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
        <label>First Name</label></br>
        <input type="text" name="emplo_fname" id="name" value="{{$employees->emplo_fname}}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="emplo_lname" id="name" value="{{$employees->emplo_lname}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="emplo_address" id="address" value="{{$employees->emplo_address}}" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="emplo_phone" id="phone" value="{{$employees->emplo_phone}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="emplo_email" id="email" value="{{$employees->emplo_email}}" class="form-control"></br>
        <label>Job</label></br>
        <input type="text" name="emplo_job" id="job" value="{{$employees->emplo_job}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="emplo_status" id="status" value="{{$employees->emplo_status}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop