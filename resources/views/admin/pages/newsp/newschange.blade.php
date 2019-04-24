@extends('admin.pages.newsp.news')
@section('content')
@include('admin.pages.newsp.nav')
    {!!Form::open(['route'=>'posts.store','enctype' => 'multipart/form-data'])!!}
    <div class="form-group">
        <h2>Новый пост</h2>
            {!!Form::label('title','Заголовок')!!}
            {!!Form::text('title',null,['class'=>'form-control'])!!}
          </div>
          <div class="form-group">
                {!!Form::label('body','Текст')!!}
                {!!Form::textarea('body','',['class'=>'form-control'])!!}
                {!!Form::file('path') !!}
                
          </div>
          {!!Form::submit('Опубликовать пост',['class'=>'btn btn-primary btn-lg btn-block'])!!}
    {!!Form::close()!!}
@endsection