<?php

namespace App\Http\Controllers\Regular;
use App\User;
use App\City;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UpdateUserController extends Controller
{
    public function edit(User $user)
    {
        if (Auth::check()){
            $user = Auth::user();
        }
        $city_list = City::select('id','name')->get();
        

        return view('regularuser.pages.profile.update',['user'=>$user, 'city_list'=>$city_list]);
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'name' => 'string|max:255',
            'fio' => 'string|max:255',
            'email' => [
                'required',
                'email',
                'string',
                'max:255',
                \Illuminate\Validation\Rule::unique('users')->ignore(Auth::user()->id),
            ],
            'password' => 'nullable|string|min:6|confirmed',
            'tel' => 'required|numeric|phone',
        ]);
        $user = Auth::user();
        $user->name = $request->name;
        $user->fio = $request->fio;
        $user->email = $request->email;
        $user->tel = $request->tel;
        $user->city_id = $request->city_id;
        $request['password']==null ?: $user->password = bcrypt($request['password']);
        $user->save();
        $request->session()->flash('success', 'Профиль успешно обновлен');
        return redirect()->back();
    }
    public function show(){
        return view('regularuser.pages.profile.show');
    }
}
