<?php

namespace App\Http\Controllers\Regular;
use App\Price;
use App\Regzayavki;
use App\Mail;

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
        $price_list = Price::pluck('title','id')->toArray();
    	return view('regular.page.zayavki.zayavkichange')->with(compact('price_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $price_list = Price::pluck('title','id')->toArray();
    	return view('regular.page.zayavki.zayavkichange')->with(compact('price_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Regzayavki::create($request->all());
        Mail::send(['text'=>'mail'],['name','jjjjjj'], function ($message) {
            $message->from('jostroushko@gmail.com', 'Сайт фотографа');
            $message->to((request()->input('email')), (request()->input('fio')));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
