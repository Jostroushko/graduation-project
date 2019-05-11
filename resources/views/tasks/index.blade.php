@extends('pages')
@section('content')
<div class="container">
    <div class="card-columns my-3"> 
            @foreach ($posts as $post)
            <div class="card"> 
                <img class="news-pic" src="{{asset('/storage/'.$post->path)}}" alt=" ">
              <div class="card-body"> 
                <h4 class="card-title">{{ $post->title }}</h4>
              </div>
              <div class="card-footer text-center"><small class="text-muted"><a class="links" href="posts/{{$post->id}}">Читать далее...</a></small></div> 
            </div> 
            @endforeach
          </div>
         
</div>
@endsection