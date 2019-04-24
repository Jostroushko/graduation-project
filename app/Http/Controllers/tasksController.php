<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class tasksController extends Controller
{
    //
    public function index(){
    	$posts=App\post::all();
    	return view('tasks.index', compact('posts'));
    }

    public function show($id){
    	$post = App\post::find($id);
    	return view('tasks.show', compact('post'));
    }
}
