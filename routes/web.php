<?php
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Orders.index');
});


//for get the in build routes using resources
//Route :: resource('orders',OrderController::class);


Route::post('Orders/create', function () {
    return view('Orders.index');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('orders/{id}/edit', [OrderController::class, 'edit'])->name('orders.edit');

Route::post('/orders/create', [OrderController::class, 'create'])->name('orders.Create');


Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');


Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
