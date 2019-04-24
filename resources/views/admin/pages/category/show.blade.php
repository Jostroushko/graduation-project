@extends('admin.pages.category.category')
@section('content')
@include('admin.pages.category.nav')
<div class="container">
       @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif 
            <div class="row">
                
                <div class="col-lg-4 col-md-4 col-sm-12 desc">
                  
                 <h2>{{$category->title}}</h2>
                <a href="{{URL::to('admin/category/'.$category->id.'/edit')}}" class="btn btn-default">редактировать</a>
                {!!Form::open(['method'=>'DELETE', 'route'=>['category.destroy',$category->id]])!!}
                {!!Form::submit('удалить',['class'=>'btn btn-danger btn-lg btn-block'])!!}
                {!!Form::close()!!}
                </div>
                
               </div>
  
    </div>
@endsection