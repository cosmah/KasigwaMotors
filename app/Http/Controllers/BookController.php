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
        return view('books.purchase');
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
            // 'message'=>'required|string|max:255',
            'name' => 'required|string|max:255',
            'nin'=> 'required|string|max:255',
            'address'=> 'required|string|max:255',
            'email'=> 'required|string|max:50',
            'phone'=> 'required|string|max:10',
            'car_model'=> 'required|string|max:255',
            'car_make'=> 'required|string|max:255',
            'car_color'=> 'required|string|max:255',
            'car_price'=> 'required|integer|max:2550000000',
            'car_mileage'=> 'required|string|max:255',
            'car_quantity'=> 'required|integer|max:255',
            'car_fuel' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        $request->user()->books()->create($validated);

        return redirect(route('purchase'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
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
