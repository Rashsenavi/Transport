<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Booking;
use Illuminate\View\View;

class BookingController extends Controller
{
    
   /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
       
            $bookings = Booking::all();
            return view ('bookings.index')->with('bookings', $bookings);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Booking::create($input);
        return redirect('bookings')->with('flash_message', 'Booking Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {   
        $booking = Booking::find($id);
        return view('bookings.show')->with('booking', $booking);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $booking = Booking::find($id);
        return view('bookings.edit')->with('bookings', $booking);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $booking = Booking::find($id);
        $input = $request->all();
        $booking->update($input);
        return redirect('bookings')->with('flash_message', 'Booking Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Booking::destroy($id);
        return redirect('bookings')->with('flash_message', 'Booking deleted!'); 
    }
}
