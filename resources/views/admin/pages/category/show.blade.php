@extends('admin.pages.page')
@section('content')
@include('admin.nav')

<div class="col-lg-10 col-sm-12 adm-content adm">
    @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif 
    
    <div class="col desc">
      
        <h2>{{$category->title}}</h2>
        <img class="img-fluid" src="{{asset('/storage/'.$category->path)}}" alt=" ">
       <a href="{{URL::to('admin/category/'.$category->id.'/edit')}}" class="btn btn-default">редактировать</a>
       {!!Form::open(['method'=>'DELETE', 'route'=>['category.destroy',$category->id]])!!}
       {!!Form::submit('удалить',['class'=>'btn btn-danger btn-lg btn-block'])!!}
       {!!Form::close()!!}
    
    </div>
   </div>

</div>
@endsection