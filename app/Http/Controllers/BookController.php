<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Car;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function purchase(): View
    {
        return view('purchase');
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

        $request->user()->books()->create($validated);

        return redirect(route('welcome'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
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

        return view('cart', [
            'formData' => $validated,
            'totalCost' => $totalCost
        ]);
    }

    public function summary()
{
    $bookings = Book::select('id', 'name','Booking Date', 'car_model', 'car_make', 'car_price', 'car_quantity')
    ->get()
    ->map(function ($booking, $index) {
        $booking->index = $index + 1; // Add the index dynamically
        $booking->total_cost = $booking->car_price * $booking->car_quantity; // Calculate total cost
        return $booking;
    });


    return view('summary', compact('bookings'));
}

public function showDetails($id)
{
    $booking = Book::findOrFail($id);

    return view('bookingdetails', compact('booking'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }

    public function showPurchaseForm($id)
    {
        $car = Car::findOrFail($id);
        return view('purchase', compact('car'));
    }



}
