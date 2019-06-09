<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Regzayavki;
use App\Status;
use App\Http\Requests\CreateZayavkaRequest;

class IndexController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function zayavki(){
       
        $zayavka=Regzayavki::latest()
        ->filter(request(['month', 'year']))
        ->paginate(5);
        return view('admin.pages.viewz')->with(compact('zayavka'));
    }
    public function edit($id)
    {
        $status_list = Status::select('id','ready')->get();
        $zayavka = Regzayavki::find($id);
        return view('admin.pages.zayavki.edit')->with(compact('zayavka','status_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $zayavka= Regzayavki::find($id);
        $zayavka->status_id=$request->status_id;
        $zayavka->save();
        $request->session()->flash('success', 'Статус заявки успешно обновлен');
        return redirect()->route('admin.pages.zayavki.edit');
    }
    public function delete(Request $request,$id){
        $zayavka= Regzayavki::find($id);
        $zayavka->delete();
        $request->session()->flash('success-delz', 'Заявка успешно удалена');
        return redirect()->back();
    }
    public function price(){
        return view('admin.pages.price');
    }
    public function works(){
        return view('admin.pages.works');
    }
}
