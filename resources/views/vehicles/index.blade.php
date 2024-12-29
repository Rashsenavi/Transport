@extends('layout')
@section('content')
   
           
                <div class="card">
                    <div class="card-header">
                        <h2>Vehicle Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/vehicles/create') }}" class="btn btn-success btn-sm" title="Add New Driver">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Vehicle_Type</th>
                                        <th>Vehicle_Number</th>
                                        <th>Model</th>
                                        <th>Capacity</th>
                                        <th>Owner_Name</th>
                                        <th>Owner_Number</th>
                                        <th>Actions</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($vehicles as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->vehicle_type }}</td>
                                        <td>{{ $item->vehicle_number }}</td>
                                        <td>{{ $item->model }}</td>
                                        <td>{{ $item->capacity }}</td>
                                        <td>{{ $item->owner_name }}</td>
                                        <td>{{ $item->owner_number }}</td>
 
 
 
                                        <td>
                                            <a href="{{ url('/vehicles/' . $item->id) }}" title="View Vehicle"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/vehicles/' . $item->id . '/edit') }}" title="Edit Vehicle"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/vehicles' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Vehicle" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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