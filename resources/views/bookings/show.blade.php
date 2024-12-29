@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Drivers Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Passenger ID : {{ $booking->passenger_id }}</h5>
        <p class="card-text">Driver ID : {{ $booking->driver_id }}</p>
        <p class="card-text">Vehicle ID : {{ $booking->vehicle_id }}</p>
        <p class="card-text">Pickup Location : {{ $booking->pickup_location }}</p>
        <p class="card-text">Dropoff Location : {{ $booking->dropoff_location }}</p>
        <p class="card-text">Fare : {{ $booking->fare }}</p>
        <p class="card-text">Pickup Time : {{ $booking->pickup_time }}</p>
        <p class="card-text">Dropoff Time : {{ $booking->dropoff_time }}</p>

  </div>
       
    </hr>
  
  </div>
</div>
@endsection