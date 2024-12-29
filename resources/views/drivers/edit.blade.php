@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('drivers/' .$drivers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$drivers->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$drivers->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$drivers->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$drivers->mobile}}" class="form-control"></br>
        <label>License Number</label></br>
        <input type="text" name="license_number" id="license_number" value="{{ $drivers->license_number }}" class="form-control"></br>

        <label>Vehicle ID</label></br>
        <input type="text" name="vehicle_id" id="vehicle_id" value="{{ $drivers->vehicle_id }}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop