@extends('pages')
@section('content')
<div class="container">
        <div class="news-block text-left img-thumbnail">
                <div><h3>{{$post->title}}</h3>
                    <p>{!!$post->body!!}</p>
                    <img class="img-thumbnail rounded float-right post-img" src="{{asset('/storage/'.$post->path)}}" alt=" ">
                </div>
                <div class="news-footer">
                <p>{{$post->created_at}}</p>
                <p><a class="links" href="/posts">Назад...</a></p>
                </div>
            </div>
</div>
@endsection