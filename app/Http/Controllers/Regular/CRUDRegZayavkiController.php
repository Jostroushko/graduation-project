<?php

namespace App\Http\Controllers\Regular;
use App\Price;
use App\Regzayavki;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CRUDRegZayavkiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $regz = Regzayavki::orderby('created_at','desc')->paginate(5);
    	return view('regularuser.index')->with(compact('regz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $price_list = Price::select('id','title','cash')->get();
    	return view('regularuser.pages.zayavki.zayavkichange')->with(compact('price_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $price_list = Price::select('id','title','cash')->get();
        $this->validate($request,[
            'fio'=>'required|min:6',
            'tema'=>'required|min:6',
            'z_text'=>'required|min:140',
            'doptel'=>'required|max:20',

        ]);
      
        $regz= new Regzayavki();
        $regz->user_id=Auth::user()->id;
        $regz->name=Auth::user()->name;
        $regz->doptel=$request->doptel;
        $regz->price_id=$request->price_id;
        $regz->tema=$request->tema;
        $regz->z_text=$request->z_text;
        $regz->status_id=2;
        $regz->save();
        Mail::send(['text'=>'mail'],['name','jjjjjj'], function ($message) {
            $message->from('jostroushko@gmail.com', 'Сайт фотографа');
            $message->to((Auth::user()->email), (request()->input('fio')));
            $message->subject('заявка принята');
            $message->setContentType('text/html');
        });
        $request->session()->flash('message', 'На ваш адрес было выслано письмо с подтверждением');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $regz = Regzayavki::find($id);
        return view('regularuser.pages.zayavki.show')->with(compact('regz'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $price_list = Price::select('id','title','cash')->get();
        $regz = Regzayavki::find($id);
        return view('regularuser.pages.zayavki.edit')->with(compact('regz', 'price_list'));
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
        $price_list = Price::select('id','title','cash')->get();
        $this->validate($request,[
            'fio'=>'required|min:6',
            'tema'=>'required|min:6',
            'z_text'=>'required|min:140',
            'doptel'=>'required|max:20',

        ]);
      
        $regz= Regzayavki::find($id);
        $regz->doptel=$request->doptel;
        $regz->price_id=$request->price_id;
        $regz->tema=$request->tema;
        $regz->z_text=$request->z_text;
        $regz->status_id=3;
        $regz->save();
        $request->session()->flash('success', 'Успешно обновлен');
        return redirect()->route('zayavki.show',$regz->id)->with(compact('regz', 'price_list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $regz= Regzayavki::find($id);
        $regz->delete();
        $request->session()->flash('success-del', 'Работа успешно удалена');
        return redirect()->back();
    }
}
