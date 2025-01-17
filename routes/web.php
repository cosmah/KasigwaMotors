<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HiringController;
use App\Models\Car;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;


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
    CarController::class,
    'showPurchaseForm'
])->name('purchase');

Route::get('/hiring/{id}', [
    HiringController::class,
    'showHiringForm'
])->name('hiring');

Route::get('/sales', function () {
    $cars = Car::all();
    return view('sales', ['cars' => $cars]);
});

// Add this new route for handling the purchase form submission to cart
Route::post('/cart', [BookController::class, 'showCart'])->name('show.cart');
// Add this new route for handling the hiring form submission to cart
Route::post('/carts', [HiringController::class, 'showCart'])->name('show.carts');


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

// Update the books store route
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/hirings', [HiringController::class, 'store'])->name('hirings.store');

Route::post('/show-cart', [BookController::class, 'showCart'])->name('show.cart');


Route::resource('cars', CarController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::get('/cars/vehicles', [
    CarController::class,
    'vehicles'
])->name('cars.vehicles');

Route::get('/vehicles', [
    CarController::class,
    'vehicles'
])->name('vehicles');




// bookings handling
Route::resource(('books'), BookController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

// bookings handling
Route::resource(('hirings'), HiringController::class)
    ->only(['hiring', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

// Add this new route for handling the summary page
Route::get('/summary', [BookController::class, 'summary'])->name('summary');
Route::get('/bookings/{id}', [BookController::class, 'showDetails'])->name('bookings.bookingdetails');

// Add this new route for handling the summary page
Route::get('/hiring-summary', [HiringController::class, 'summary'])->name('hiring-summary');
Route::get('/carhirings/{id}', [HiringController::class, 'showDetails'])->name('carhirings.hiringdetails');

//contact form
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contact/{contact}', [ContactController::class, 'show'])->name('contacts.show');
Route::delete('/contact/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');

require __DIR__ . '/auth.php';
