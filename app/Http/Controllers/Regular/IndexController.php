<?php

namespace App\Http\Controllers\Regular;
use App\User;
use App\Regzayavki;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index(){
        $regz = Regzayavki::latest()
        ->filter(request(['month', 'year']))
        ->paginate(5);
        // $regz = Regzayavki::orderby('created_at','desc')->paginate(5);
        return view('regularuser.index')->with(compact('regz'));
    }
}
