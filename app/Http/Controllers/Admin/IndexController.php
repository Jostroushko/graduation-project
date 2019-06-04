<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Zayavki;
use App\Regzayavki;
use App\Http\Requests\CreateZayavkaRequest;

class IndexController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function zayavki(){
        $zayavkis=Regzayavki::latest()
        ->filter(request(['month', 'year']))
        ->paginate(5);
        return view('admin.pages.viewz',compact('zayavkis'));
    }
    public function delete(Request $request,$id){
        $zayavka= Zayavki::find($id);
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
