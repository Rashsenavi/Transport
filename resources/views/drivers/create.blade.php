@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Driver Page</div>
  <div class="card-body">
      
      <form action="{{ url('drivers') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <label>License Number</label></br>
        <input type="text" name="license_number" id="license_number" class="form-control"></br>

        <label>Vehicle ID</label></br>
        <input type="text" name="vehicle_id" id="vehicle_id" class="form-control"></br>

       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop