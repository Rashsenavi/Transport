<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\View\View;


class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
       
            $vehicles = Vehicle::all();
            return view ('vehicles.index')->with('vehicles', $vehicles);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Vehicle::create($input);
        return redirect('vehicles')->with('flash_message', 'Vehicle Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {   
        $vehicle = Vehicle::find($id);
        return view('vehicles.show')->with('vehicle', $vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $vehicle = Vehicle::find($id);
        return view('vehicles.edit')->with('vehicles', $vehicle);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $vehicle = Vehicle::find($id);
        $input = $request->all();
        $vehicle->update($input);
        return redirect('vehicles')->with('flash_message', 'Vehicle Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Vehicle::destroy($id);
        return redirect('vehicles')->with('flash_message', 'Vehicle deleted!'); 
    }
}
