@extends('admin.pages.page')
@section('content')
@include('admin.pages.nav')
<div class="container">
        @if (session()->has('success-del'))
        <div class="alert alert-denger">{{ session('success-del') }}</div>
    @endif 
        
  @foreach ($portfolio as $p)
     <div class="row"> 
         <div class="col-lg-12 col-md-12 col-sm-12 desc">
                       <h3><a href="{{URL::to('admin/portfolio/'.$p->id)}}">{{$p->title}}</a></h3>
                       <p>{{$p->about}}</p>
                       <p>{{$p->category->title}}</p>
                </div>
                 </div>
  <hr>
  @endforeach
  {{ $portfolio->links() }}
    </div>

@endsection