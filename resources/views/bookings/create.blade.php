@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Booking Page</div>
  <div class="card-body">
      
      <form action="{{ url('bookings') }}" method="post">
        {!! csrf_field() !!}
        <label>Passenger ID</label></br>
        <input type="number" name="passenger_id" id="passenger_id" class="form-control"></br>

        <label>Driver ID</label></br>
        <input type="number" name="driver_id" id="driver_id" class="form-control"></br>

        <label>Vehicle ID</label></br>
        <input type="number" name="vehicle_id" id="vehicle_id" class="form-control"></br>

        <label>Pickup Location</label></br>
        <input type="text" name="pickup_location" id="pickup_location" class="form-control"></br>

        <label>Dropoff Location</label></br>
        <input type="text" name="dropoff_location" id="dropoff_location" class="form-control"></br>

        <label>Fare</label></br>
        <input type="number" step="0.01" name="fare" id="fare" class="form-control"></br>

        <label>Pickup Time</label></br>
        <input type="datetime-local" name="pickup_time" id="pickup_time" class="form-control"></br>

        <label>Dropoff Time</label></br>
        <input type="datetime-local" name="dropoff_time" id="dropoff_time" class="form-control"></br>


                <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop