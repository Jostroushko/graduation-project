@extends('admin.pages.page')
@section('content')
@include('admin.nav')
<div class="col-10 adm-content adm">
    @if (session()->has('success-del'))
    <div class="alert alert-denger">{{ session('success-del') }}</div>
@endif 
    <div class="col ">
      <div class="d-flex flex-wrap">
        @foreach ($portfolio as $p)  
        
            <div class="p-2" >
        <img class="image" title="Нажмите для увеличения изображения" src="{{asset('/storage/'.$p->path)}}" alt=" ">
        <a href="{{URL::to('admin/portfolio/'.$p->id.'/edit')}}">редактировать</a>
      </div>
      
     @endforeach
    </div>
     {{ $portfolio->links() }}
    </div>
   </div>
   
</div>
@endsection