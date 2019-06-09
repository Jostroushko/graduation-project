<?php

namespace App\Http\Controllers;
use App\Category;
use App\Portfolio;
use Illuminate\Http\Request;

class portfolioController extends Controller
{
    public function index(){
        $category= Category::orderby('created_at','desc')->paginate(5);
    	return view('portfolio.index', compact('category'));
    }
    public function pics($id){
        $portfolio= Portfolio::where('category_id', '=', $id)
                               ->paginate(10);
    	return view('portfolio.pics', compact('portfolio'));
    }
}
