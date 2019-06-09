@extends('admin.pages.page')
@section('content')
@include('admin.nav')
<div class="col-lg-10 col-sm-12 adm-content adm">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    
    <div class="col desc">
      
        <img src="{{asset('/storage/'.$pic->path)}}" alt="тут background" width="50%">
        {{-- {{dd($pic)}} --}}
        
        {!!Form::model($pic, array('route' => array('backpic.update', $pic->id), 'method'=>'PUT','enctype' => 'multipart/form-data'))!!}
                <div class="form-group">
                    <h2>Обновить фоновое изображение</h2>
                        {!!Form::label('path','Загружайте изображения высокого разрешения')!!}<br>
                        {!!Form::file('path') !!}
                      {!!Form::submit('Готово',['class'=>'btn btn-primary btn-lg btn-block'])!!}
                {!!Form::close()!!}
    
    </div>
   </div>
</div>
@endsection