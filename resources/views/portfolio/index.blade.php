@extends('layout')
@section('content')
<div class="row"> 
    @foreach ($portfolio as $p)
    <div class="col-lg-3 col-md-4 col-6">
        <h2>{{$p->title}}</h2>  
        <img class="img-fluid" src="{{asset('/storage/'.$p->path)}}" alt=" ">
        <p>{{$p->category->title}}</p>

    </div> 
    @endforeach
</div>
 @endsection