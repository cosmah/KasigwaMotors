<?php

namespace App\Http\Controllers;

use App\Models\Hiring;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Car;
use Illuminate\Http\RedirectResponse;

class HiringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function hiring(): View
    {
        return view('hiring');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nin' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|max:50',
            'phone' => 'required|string|max:10',
            'car_model' => 'required|string|max:255',
            'car_make' => 'required|string|max:255',
            'car_color' => 'required|string|max:255',
            'car_price' => 'required|integer|max:2550000000',
            'car_mileage' => 'required|string|max:255',
            'car_quantity' => 'required|integer|max:255',
            'car_fuel' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        $request->user()->hirings()->create($validated);

        return redirect(route('dashboard'))
            ->with('success', 'Your hire has been successfully processed!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Hiring $hiring)
    {
        //
    }

    public function showCart(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nin' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|max:50',
            'phone' => 'required|string|max:10',
            'car_model' => 'required|string|max:255',
            'car_make' => 'required|string|max:255',
            'car_color' => 'required|string|max:255',
            'car_price' => 'required|integer|max:2550000000',
            'car_mileage' => 'required|string|max:255',
            'year' => 'required',
            'car_quantity' => 'required|integer|max:255',
            'car_fuel' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        // Calculate total cost
        $totalCost = $validated['car_price'] * $validated['car_quantity'];

        return view('carts', [
            'formData' => $validated,
            'totalCost' => $totalCost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hiring $hiring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hiring $hiring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hiring $hiring)
    {
        //
    }

    public function showHiringForm($id)
    {
        $car = Car::findOrFail($id);
        return view('hiring', compact('car'));
    }


    public function summary()
    {
        $carhirings = Hiring::select('id', 'name', 'Booking Date', 'car_model', 'car_make', 'car_price', 'car_quantity')
            ->get()
            ->map(function ($carhiring, $index) {
                $carhiring->index = $index + 1; // Add the index dynamically
                $carhiring->total_cost = $carhiring->car_price * $carhiring->car_quantity; // Calculate total cost
                return $carhiring;
            });

        return view('hiring-summary', compact('carhirings'));
    }

    public function showDetails($id)
    {
        $carhiring = Hiring::findOrFail($id);

        return view('hiringdetails', compact('carhiring'));
    }

}
