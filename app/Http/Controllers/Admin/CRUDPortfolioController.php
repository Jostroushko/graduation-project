<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Portfolio;
class CRUDPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio= Portfolio::orderby('created_at','desc')->paginate(5);

        return view('admin.pages.portfolioshow',compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_list = Category::pluck( 'title', 'id')->toArray();
        return view('admin.pages.portfolio.portfoliochange')->with(compact('category_list'));
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
            'category_id'=>'required',
            'about'=>'required'

            
        ]);

        $portfolio= new Portfolio();
        $portfolio->title=$request->title;
        $portfolio->category_id=$request->category_id;
        $portfolio->path=$request->file('path')->store('uploads', 'public');
        $portfolio->about=$request->about;
        $portfolio->save();
        $request->session()->flash('success', 'Категория успешно добавлена');
        // return view('admin.pages.newsshow');
        return redirect()->route('portfolio.show',$portfolio->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio = Portfolio::find($id);
        return view('admin.pages.portfolio.show')->with(compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category_list = Category::pluck('id', 'title')->toArray();;
        $portfolio = Portfolio::find($id);
        return view('admin.pages.portfolio.edit')->with(compact('portfolio,category_list'));
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
        $category_list = Category::pluck('id', 'title')->toArray();;
        $this->validate($request,[
            'title'=>'required|max:255',
            'category_id'=>'required',
            'path'=>'image',
            'about'=>'required'

            
        ]);

        $portfolio= new Portfolio();
        $portfolio->title=$request->title;
        $portfolio->category_id=$request->category_id;
        $portfolio->path=$request->file('path')->store('uploads', 'public');
        $portfolio->about=$request->about;
        $portfolio->save();
        $request->session()->flash('success', 'Успешно обновлен');
        return redirect()->route('portfolio.show',$portfolio->id)->with(compact('category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio= portfolio::find($id);
        $portfolio->delete();
        $request->session()->flash('success-del', 'Работа успешно удалена');
        return view('admin.pages.portfolioshow');
    }
}
