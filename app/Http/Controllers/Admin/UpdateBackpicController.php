<?php

namespace App\Http\Controllers\Admin;
use App\Backpic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateBackpicController extends Controller
{
    public function edit()
    {
        $pic =Backpic::first();
        return view('admin.pages.updatebackpic')->with(compact('pic'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'path'=>'image',
            
        ]);

        $pic = Backpic::find($id);
        $pic->path=$request->file('path')->storeAs('uploads','backpic.jpg', 'public');
        $pic->save();
        $request->session()->flash('success', 'Фон успешно обновлен');
        // return view('admin.pages.newsshow');
        return redirect()->back();
    }

}
