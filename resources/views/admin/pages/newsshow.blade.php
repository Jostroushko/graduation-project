@extends('admin.pages.page')
@section('content')
@include('admin.pages.nav')
<div class="container">
        @if (session()->has('success-del'))
        <div class="alert alert-denger">{{ session('success-del') }}</div>
    @endif 
        
  @foreach ($post as $p)
     <div class="row"> 
         <div class="col-lg-12 col-md-12 col-sm-12 desc">
                       <h3><a href="{{URL::to('admin/posts/'.$p->id)}}">{{$p->title}}</a></h3>
                       <p>{{$p->body}}</p>
                </div>
                 </div>
  <hr>
  @endforeach
  {{ $post->links() }}
    </div>

@endsection

