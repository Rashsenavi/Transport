<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Driver;
use Illuminate\View\View;



class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
       
            $drivers = Driver::all();
            return view ('drivers.index')->with('drivers', $drivers);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Driver::create($input);
        return redirect('drivers')->with('flash_message', 'Driver Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {   
        $driver = Driver::find($id);
        return view('drivers.show')->with('driver', $driver);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $driver = Driver::find($id);
        return view('drivers.edit')->with('drivers', $driver);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $driver = Driver::find($id);
        $input = $request->all();
        $driver->update($input);
        return redirect('drivers')->with('flash_message', 'Driver Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Driver::destroy($id);
        return redirect('drivers')->with('flash_message', 'Driver deleted!'); 
    }
}
