<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Price;
class CRUDPricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $price= Price::orderby('created_at','desc')->paginate(5);

        return view('admin.pages.priceshow',compact('price'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.price.pricechange');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|max:255',
            'body'=>'required',
            'cash'=>'required|numeric',
            
        ]);

        $price= new Price();
        $price->title=$request->title;
        $price->body=$request->body;
        $price->cash=$request->cash;
        $price->save();
        $request->session()->flash('success', 'Прейскурант успешно обновлен');
        // return view('admin.pages.newsshow');
        return redirect()->route('price.show',$price->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $price = Price::find($id);
        return view('admin.pages.price.show')->with(compact('price'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $price = Price::find($id);
        return view('admin.pages.price.edit')->with(compact('price'));
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
        $this->validate($request,[
            'title'=>'required|max:255',
            'body'=>'required',
            'cash'=>'required|numeric',
            
        ]);

        $price= Price::find($id);
        $price->title=$request->title;
        $price->body=$request->body;
        $price->cash=$request->cash;
        $price->save();
        $request->session()->flash('success', 'Прейскурант успешно обновлен');
        // return view('admin.pages.newsshow');
        return redirect()->route('price.show',$price->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $price= Price::find($id);
        $price->delete();
        $request->session()->flash('success-del', 'Успешное удаление');
        return view('admin.pages.priceshow');
    }
}
