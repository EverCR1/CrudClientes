<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomersController;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/customers',[CustomersController::class,'index'])
    ->name('customers.index');

Route::get('/customers/create',[CustomersController::class,'create'])
    ->name('customers.create');

Route::post('/customers/create',[CustomersController::class,'store'])
    ->name('customers.store');*/

Route::resource('customers',CustomersController::class); //Obtiene las funciones de la clase CustomerController
