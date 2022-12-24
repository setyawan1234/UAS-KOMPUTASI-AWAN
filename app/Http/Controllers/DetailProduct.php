<?php

namespace App\Http\Controllers;

use App\Models\DetailGrade;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailProduct extends Controller
{
    public function show($id)
    {
        $product = Product::where('id', $id)->first();

        $detail = DetailGrade::where('products_id', $product->id)->take(4)->get();

        return view('landingpage.productdetail', [
            'title' => 'Detail Product',
            'details' => $detail,
            'product' => $product
        ]);
    }
}
