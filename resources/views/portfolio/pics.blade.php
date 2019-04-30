@extends('pages')
@section('content')
{{-- здесь должны находиться фото --}}
<div class="row"> 
    @foreach ($portfolio as $p)
    <div class="col-lg-3 col-md-4 col-6 vis">
        <h2>{{$p->title}}</h2>  
        <img class="img-fluid" src="{{asset('/storage/'.$p->path)}}" alt=" ">
        <p class="pc-title">{{$p->category->title}}</p>
    </div> 
    @endforeach
</div>
 @endsection