<?php

namespace App\Http\Controllers\Admin;
use App\Backpic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateBackpicController extends Controller
{
    //

    /*
    id = 1 обновление первой строки таблицы
    style backgraund url $pic->path
    */

    
    public function index(){
        // return view('admin.updatebackpic');
    }
    // public function edit($id)
    // {
    //     $pic = Backpic::find($id);
    //     return view('admin.pages.price.edit')->with(compact('price'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $this->validate($request,[
    //         'title'=>'required|max:255',
    //         'body'=>'required',
    //         'cash'=>'required|numeric',
            
    //     ]);

    //     $price= Price::find($id);
    //     $price->title=$request->title;
    //     $price->body=$request->body;
    //     $price->cash=$request->cash;
    //     $price->save();
    //     $request->session()->flash('success', 'Прейскурант успешно обновлен');
    //     // return view('admin.pages.newsshow');
    //     return redirect()->route('price.show',$price->id);
    // }

}
