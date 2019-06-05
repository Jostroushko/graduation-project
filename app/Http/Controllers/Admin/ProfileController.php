<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Userstatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(){
        $prof = User::orderby('created_at','desc')->paginate(5);
        return view('admin.pages.profiles.show')->with(compact('prof'));
    }
    public function edit(User $user)
    {
        $userstatus_list = Userstatus::select('id','name')->get();
        return view('admin.pages.profiles.edit',['user'=>$user, 'userstatus_list'=>$userstatus_list]);
    }
    public function update(Request $request, User $user)
    {
        $user->userstatus_id = $request->userstatus_id;
        $user->discount = $request->discount;
        $user->save();
        $request->session()->flash('success', 'Профиль успешно обновлен');
        return redirect()->back();
    }
}
