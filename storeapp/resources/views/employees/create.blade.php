@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">
      
      <form action="{{ url('employee') }}" method="post">
        {!! csrf_field() !!}
        <label>First Name</label></br>
        <input type="text" name="emplo_fname" id="fname" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="emplo_lname" id="lname" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="emplo_address" id="address" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="emplo_phone" id="phone" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="emplo_email" id="email" class="form-control"></br>
        <label>Job</label></br>
        <input type="text" name="emplo_job" id="job" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="emplo_status" id="status" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop