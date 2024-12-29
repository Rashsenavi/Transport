<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Passenger;
use Illuminate\View\View;



class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
       
            $passengers = Passenger::all();
            return view ('passengers.index')->with('passengers', $passengers);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('passengers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Passenger::create($input);
        return redirect('passengers')->with('flash_message', 'Passenger Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {   
        $passenger = Passenger::find($id);
        return view('passengers.show')->with('passenger', $passenger);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $passenger = Passenger::find($id);
        return view('passengers.edit')->with('passengers', $passenger);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $passenger = Passenger::find($id);
        $input = $request->all();
        $passenger->update($input);
        return redirect('passengers')->with('flash_message', 'Passenger Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Passenger::destroy($id);
        return redirect('passengers')->with('flash_message', 'Passenger deleted!'); 
    }
}
