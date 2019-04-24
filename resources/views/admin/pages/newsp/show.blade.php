@extends('admin.pages.newsp.news')
@section('content')
@include('admin.pages.newsp.nav')
<div class="container">
       @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif 
            <div class="row">
                
                <div class="col-lg-4 col-md-4 col-sm-12 desc">
                  
                 <h2>{{$post->title}}</h2>
                <p>
                        {{Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}
                     </p>
                    
                    <img class="img-fluid" src="{{asset('/storage/'.$post->path)}}" alt=" ">
              
                 <p>
                    {!!$post->body!!}
                 </p>
                <a href="{{URL::to('admin/posts/'.$post->id.'/edit')}}" class="btn btn-default">редактировать</a>
                {!!Form::open(['method'=>'DELETE', 'route'=>['posts.destroy',$post->id]])!!}
                {!!Form::submit('удалить',['class'=>'btn btn-danger btn-lg btn-block'])!!}
                {!!Form::close()!!}
                </div>
                
               </div>
  
    </div>
@endsection