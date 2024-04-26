<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index() {
        
        // Fetch all products from the database
        $products = Product::all();

        // Return a JSON response with the products data
        return response()->json($products);
    }
}
