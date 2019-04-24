@extends('admin.pages.price.price')
@section('content')
@include('admin.pages.price.nav')
    {!!Form::model($price, array('route' => array('price.update', $price->id), 'method'=>'PUT'))!!}
    <div class="form-group">
        <h2>Редактировать</h2>
            {!!Form::label('title','Заголовок')!!}
            {!!Form::text('title',null,['class'=>'form-control'])!!}
            {!!Form::label('body','Описание')!!}
            {!!Form::text('body',null,['class'=>'form-control'])!!}
            {!!Form::label('cash','Стоимость')!!}
            {!!Form::text('cash',null,['class'=>'form-control'])!!}
          </div>
          {!!Form::submit('Готово',['class'=>'btn btn-primary btn-lg btn-block'])!!}
    {!!Form::close()!!}
@endsection