<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('cars.index',[
            'cars' => Car::with('user')->latest()->get(),
        ]);
    }

    public function vehicles(): View
    {
        return view('cars.vehicles',[
            'cars' => Car::with('user')->latest()->get(),
        ]);
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
        'car_model' => 'required|string|max:255',
        'car_make' => 'required|string|max:255',
        'year' => 'required|integer|min:1900|max:2024',
        'images' => 'required|array|min:1|max:5',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $imagePaths = [];
    if($request->hasFile('images')) {
        foreach($request->file('images') as $image) {
            $path = $image->store('car-images', 'public');
            $imagePaths[] = $path;
        }
    }

    Car::create([
        'user_id' => auth()->id(),
        'car_model' => $validated['car_model'],
        'car_make' => $validated['car_make'],
        'year' => $validated['year'],
        'images' => $imagePaths
    ]);

    return redirect(route('cars.index'));
}

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car): View
    {
        Gate::authorize('update', $car);
         return view('cars.edit', [
            'car' => $car,
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car): RedirectResponse
    {
        Gate::authorize('update', $car);

        $validated = $request->validate([
            'car_model' => 'required|string|max:255',
            'car_make' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:2024',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'message' => 'nullable|string',
        ]);

        $imagePaths = $car->images ?? [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('car-images', 'public');
                $imagePaths[] = $path;
            }
        }

        $car->update([
            'car_model' => $validated['car_model'],
            'car_make' => $validated['car_make'],
            'year' => $validated['year'],
            'images' => $imagePaths,
            'message' => $validated['message'] ?? $car->message,
        ]);

        return redirect(route('cars.index'));
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car): RedirectResponse
    {
        //
        Gate::authorize('delete', $car);

        $car->delete();

        return redirect(route('cars.index'));
    }
}
