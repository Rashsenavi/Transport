@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Passengers Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $passenger->name }}</h5>
        <p class="card-text">Address : {{ $passenger->address }}</p>
        <p class="card-text">Mobile : {{ $passenger->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection