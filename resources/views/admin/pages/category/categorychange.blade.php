@extends('admin.pages.category.category')
@section('content')
@include('admin.pages.category.nav')
    {!!Form::open(['route'=>'category.store'])!!}
    <div class="form-group">
        <h2>Новая категория</h2>
            {!!Form::label('title','Заголовок')!!}
            {!!Form::text('title',null,['class'=>'form-control'])!!}
          </div>
          {!!Form::submit('Добавить заголовок',['class'=>'btn btn-primary btn-lg btn-block'])!!}
    {!!Form::close()!!}
@endsection