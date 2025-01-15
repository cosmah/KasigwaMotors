<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\View;
use App\Models\Car;
use App\Http\Controllers\BookController;



Route::get('/', function () {
    $cars = Car::all();
    return view('welcome', ['cars' => $cars]);
});

Route::get('/list', function () {
    $cars = Car::all();
    return view('list', ['cars' => $cars]);
});

Route::get(
    '/cars/{id}',
    [CarController::class, 'details']
)->name('details');


Route::get('/hire', function () {
    $cars = Car::all();
    return view('hire', ['cars' => $cars]);
});

// Route::middleware(['auth'])->group(function () {
//     Route::get('/book')->name('book');
// });

Route::get('/purchase/{id}', [
    CarController::class, 'showPurchaseForm'
    ])->name('purchase');

Route::get('/sales', function () {
    $cars = Car::all();
    return view('sales', ['cars' => $cars]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hire-car', function () {
    return view('hirecar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('cars', CarController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::get('/cars/vehicles', [
    CarController::class,
    'vehicles'
])->name('cars.vehicles');

// bookings handling
Route::resource(('books'), BookController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
