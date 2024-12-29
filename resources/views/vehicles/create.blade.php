@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Vehicle Page</div>
  <div class="card-body">
      
      <form action="{{ url('vehicles') }}" method="post">
        {!! csrf_field() !!}
       
        <label>Vehicle Type</label></br>
        <input type="text" name="vehicle_type" id="vehicle_type" class="form-control"></br>

        <label>Vehicle Number</label></br>
        <input type="text" name="vehicle_number" id="vehicle_number" class="form-control"></br>

        <label>Model</label></br>
        <input type="text" name="model" id="model" class="form-control"></br>

        <label>Capacity</label></br>
        <input type="number" name="capacity" id="capacity" class="form-control"></br>

        <label>Owner Name</label></br>
        <input type="text" name="owner_name" id="owner_name" class="form-control"></br>

        <label>Owner Mobile</label></br>
        <input type="text" name="owner_number" id="owner_number" class="form-control"></br>


       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop