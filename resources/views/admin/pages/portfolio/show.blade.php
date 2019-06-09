@extends('admin.pages.page')
@section('content')
@include('admin.nav')
<div class="col-lg-10 col-sm-12 adm-content adm">
    @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif 
    
    <div class="col desc">
      
        <h2>{{$portfolio->title}}</h2>
        <p>
                {{Carbon\Carbon::parse($portfolio->created_at)->format('d/m/Y')}}
             </p>
            
            <img class="img-fluid" src="{{asset('/storage/'.$portfolio->path)}}" alt=" ">
      
            <p>{{$portfolio->about}}</p>
            <p>{{$portfolio->category->title}}</p>
        <a href="{{URL::to('admin/portfolio/'.$portfolio->id.'/edit')}}" class="btn btn-default">редактировать</a>
        {!!Form::open(['method'=>'DELETE', 'route'=>['portfolio.destroy',$portfolio->id]])!!}
        {!!Form::submit('удалить',['class'=>'btn btn-danger btn-lg btn-block'])!!}
        {!!Form::close()!!}
    
    </div>
   </div>

</div>
@endsection