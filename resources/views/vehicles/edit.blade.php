@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('vehicles/' .$vehicles->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$vehicles->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$vehicles->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$vehicles->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$vehicles->mobile}}" class="form-control"></br>
        <label>License Number</label></br>
        <input type="text" name="license_number" id="license_number" value="{{ $vehicles->license_number }}" class="form-control"></br>

        <label>Vehicle ID</label></br>
        <input type="text" name="vehicle_id" id="vehicle_id" value="{{ $vehicles->vehicle_id }}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop