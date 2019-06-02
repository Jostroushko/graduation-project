<?php

namespace App\Http\Controllers\Regular;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UpdateUserController extends Controller
{
    // public function edit()
    // {
    //     return view('regularuser.pages.profile.update');
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $this->validate($request,[
    //         'fio'=>'required|min:6',
    //         'tema'=>'required|min:6',
    //         'z_text'=>'required|min:140',
    //         'doptel'=>'required|max:20',

    //     ]);
      
    //     $regz= Regzayavki::find($id);
    //     $regz->doptel=$request->doptel;
    //     $regz->price_id=$request->price_id;
    //     $regz->tema=$request->tema;
    //     $regz->z_text=$request->z_text;
    //     $regz->status_id=3;
    //     $regz->save();
    //     $request->session()->flash('success', 'Успешно обновлен');
    //     return redirect('/');
    // }
}
