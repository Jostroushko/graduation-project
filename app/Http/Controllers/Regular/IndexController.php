<?php

namespace App\Http\Controllers\Regular;
use App\User;
use App\Regzayavki;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index(){
        $regz = Regzayavki::latest()
        ->filter(request(['month', 'year']))
        ->where('user_id','=',Auth::user()->id)
        ->paginate(3);
        return view('regularuser.index')->with(compact('regz'));
    }
}
