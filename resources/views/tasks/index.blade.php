@extends('pages')
@section('content')
<ul class="list-group">
       @foreach ($posts as $post)
        <li class="list-group-item">
                <a href="posts/{{$post->id}}">
                {{ $post->body }}</a>
            </li>
        @endforeach
    </ul>
@endsection