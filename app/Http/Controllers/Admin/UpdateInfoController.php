<?php

namespace App\Http\Controllers\Admin;
use App\Inf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateInfoController extends Controller
{
    public function edit()
    {
        $info =Inf::first();
        return view('admin.pages.updateInfo')->with(compact('info'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required|max:255',
            'body'=>'required',
            
        ]);

        $info = Inf::find($id);
        $info->title=$request->title;
        $info->body=$request->body;
        $info->save();
        $request->session()->flash('success', 'Информация успешно обновлена');
        return redirect()->back();
    }
}
