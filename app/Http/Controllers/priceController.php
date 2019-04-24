<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;

class priceController extends Controller
{
    public function index()
    {
        $price= Price::orderby('created_at','desc')->paginate(5);

        return view('price.index',compact('price'));
    }
}
