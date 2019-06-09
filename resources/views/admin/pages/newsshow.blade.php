@extends('admin.pages.page')
@section('content')
@include('admin.nav')
<div class="col-lg-10 col-sm-12 adm-content adm">
    @if (session()->has('success-del'))
        <div class="alert alert-denger">{{ session('success-del') }}</div>
    @endif 
    
    <div class="col desc">
        <div class="card-columns my-3"> 
        @foreach ($post as $p)
        <div class="card"> 
            <img class="news-pic" src="{{asset('/storage/'.$p->path)}}" alt=" ">
          <div class="card-body"> 
            <h4 class="card-title">{{ $p->title }}</h4>
          </div>
          <div class="card-footer text-center"><small class="text-muted"><a class="links" href="posts/{{$p->id}}">Читать далее...</a></small></div> 
        </div> 
        @endforeach
        </div>
        {{ $post->links() }}
    </div>
   </div>
  </div>
@endsection

