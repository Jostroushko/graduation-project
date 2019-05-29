<?php

namespace App\Http\Controllers;
use App\Inf;
use Illuminate\Http\Request;

class contactsController extends Controller
{
    public function index()
    {
        $info = Inf::first();
        return view('contacts.index')->with(compact('info'));
    }
}
