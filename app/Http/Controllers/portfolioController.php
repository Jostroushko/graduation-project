<?php

namespace App\Http\Controllers;
use App\Category;
use App\Portfolio;
use Illuminate\Http\Request;

class portfolioController extends Controller
{
    public function index(){
        $category= Category::all();
    	return view('portfolio.index', compact('category'));
    }
    public function pics($id){
        $portfolio= Portfolio::where('category_id', '=', $id)
                               ->get();
    	return view('portfolio.pics', compact('portfolio'));
    }
}
