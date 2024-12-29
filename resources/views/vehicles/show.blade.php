@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Drivers Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Vehicle Type: {{ $vehicle->vehicle_type }}</h5>
        <p class="card-text">Vehicle Number: {{ $vehicle->vehicle_number }}</p>
        <p class="card-text">Model: {{ $vehicle->model }}</p>
        <p class="card-text">Capacity: {{ $vehicle->capacity }}</p>
        <p class="card-text">Owner Name: {{ $vehicle->owner_name }}</p>
        <p class="card-text">Owner Mobile: {{ $vehicle->owner_number }}</p>

  </div>
       
    </hr>
  
  </div>
</div>
@endsection