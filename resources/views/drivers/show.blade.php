@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Drivers Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $driver->name }}</h5>
        <p class="card-text">Address : {{ $driver->address }}</p>
        <p class="card-text">Mobile : {{ $driver->mobile }}</p>
        <p class="card-text">License Number : {{ $driver->license_nb }}</p>
        <p class="card-text">Vehicle ID : {{ $driver->vehicle_id }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection