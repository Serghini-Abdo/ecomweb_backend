<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/products', [ProductController::class,'index']);


// GET request for a specific product
Route::get('/api/products/{id}', 'ProductController@show');

// POST request to create a new product
Route::post('/api/products', 'ProductController@store');

// PUT request to update a product
Route::put('/api/products/{id}', 'ProductController@update');

// DELETE request to delete a product
Route::delete('/api/products/{id}', 'ProductController@destroy');