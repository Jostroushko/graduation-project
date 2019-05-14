@extends('admin.pages.page')
@section('content')
@include('admin.nav')
<div class="col-10 adm-content adm">
    <div class="col desc">
    <div class="form-group">
    {!!Form::model($price, array('route' => array('price.update', $price->id), 'method'=>'PUT'))!!}
   
        <h2>Редактировать</h2>
            {!!Form::label('title','Заголовок')!!}
            {!!Form::text('title',null,['class'=>'form-control'])!!}
            {!!Form::label('body','Описание')!!}
            {!!Form::text('body',null,['class'=>'form-control'])!!}
            {!!Form::label('cash','Стоимость')!!}
            {!!Form::text('cash',null,['class'=>'form-control'])!!}
          
          {!!Form::submit('Готово',['class'=>'btn btn-primary btn-lg btn-block'])!!}
    {!!Form::close()!!}
</div>
    </div>
   </div>

</div>
 
@endsection