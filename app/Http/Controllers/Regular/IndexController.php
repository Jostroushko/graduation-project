<?php

namespace App\Http\Controllers\Regular;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index(){
        
        return view('regularuser.index');
    }
}
