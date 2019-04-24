@extends('layout')
@section('content')
<div class="container">    
        <h2>{{$post->body}}</h2>
        <a href="/posts">назад</a>
</div>
@endsection