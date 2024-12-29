@extends('layout')
@section('content')
   
           
                <div class="card">
                    <div class="card-header">
                        <h2>Booking Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/bookings/create') }}" class="btn btn-success btn-sm" title="Add New Driver">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Passenger ID</th>
                                        <th>Driver ID</th>
                                        <th>Vehicle ID</th>
                                        <th>Pickup Location</th>
                                        <th>Dropoff Location</th>
                                        <th>Fare</th>
                                        <th>Pickup Time</th>
                                        <th>Dropoff Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($bookings as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->passenger_id }}</td>
                                        <td>{{ $item->driver_id }}</td>
                                        <td>{{ $item->vehicle_id }}</td>
                                        <td>{{ $item->pickup_location }}</td>
                                        <td>{{ $item->dropoff_location }}</td>
                                        <td>{{ $item->fare }}</td>
                                        <td>{{ $item->pickup_time }}</td>
                                        <td>{{ $item->dropoff_time }}</td>
 

 
 
                                        <td>
                                            <a href="{{ url('/bookings/' . $item->id) }}" title="View Booking"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/bookings/' . $item->id . '/edit') }}" title="Edit Booking"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/bookings' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Booking" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
          
@endsection