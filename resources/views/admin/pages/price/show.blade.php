@extends('admin.pages.price.price')
@section('content')
@include('admin.pages.price.nav')
<div class="container">
       @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif 
            <div class="row">
                
                <div class="col-lg-4 col-md-4 col-sm-12 desc">
                  
                 <h2>{{$price->title}}</h2>
                 <h3>{{$price->body}}</h3>
                 <p>{{$price->cash}}</p>
                <a href="{{URL::to('admin/price/'.$price->id.'/edit')}}" class="btn btn-default">редактировать</a>
                {!!Form::open(['method'=>'DELETE', 'route'=>['price.destroy',$price->id]])!!}
                {!!Form::submit('удалить',['class'=>'btn btn-danger btn-lg btn-block'])!!}
                {!!Form::close()!!}
                </div>
                
               </div>
  
    </div>
@endsection