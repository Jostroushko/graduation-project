<?php

namespace App\Http\Controllers;
use App\Category;
use App\Portfolio;
use Illuminate\Http\Request;

class portfolioController extends Controller
{
    public function index(){
    	$portfolio= Portfolio::all();
    	return view('portfolio.index', compact('portfolio'));
    }
}
