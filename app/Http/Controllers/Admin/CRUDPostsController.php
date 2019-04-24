<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\post;
class CRUDPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post= post::orderby('created_at','desc')->paginate(5);

        return view('admin.pages.newsshow',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.newsp.newschange');
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
            'path'=>'image'
            
        ]);

        $post= new post();
        $post->title=$request->title;
        $post->body=$request->body;
        $post->path=$request->file('path')->store('uploads', 'public');
        $post->save();
        $request->session()->flash('success', 'Пост успешно опубликован');
        // return view('admin.pages.newsshow');
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id);
        return view('admin.pages.newsp.show')->withpost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id);
        return view('admin.pages.newsp.edit')->withpost($post);
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
            'body'=>'required'
        ]);

        $post= post::find($id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        $request->session()->flash('success', 'Пост успешно обновлен');
        // return view('admin.pages.newsshow');
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $post= post::find($id);
        $post->delete();
        $request->session()->flash('success-del', 'Пост успешно удален');
        return view('admin.pages.newsshow');
    }
}
