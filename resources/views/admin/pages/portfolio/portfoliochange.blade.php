@extends('admin.pages.page')
@section('content')
@include('admin.nav')

<div class="col-10 adm-content adm">
  <div class="col desc">
    {!!Form::open(['route'=>'portfolio.store','enctype' => 'multipart/form-data'])!!}
    <div class="form-group">
        <h2>Новая работа</h2>
        <div class="col">
        {!!Form::label('title','Заголовок')!!}
        {!!Form::text('title',null,['class'=>'form-control'])!!}
        {!!Form::label('category_id','Вид')!!}
      {!!Form::select('category_id', $category_list, null, ['class' => 'form-control'])!!}   
       {!!Form::label('about','Текст')!!}
            {!!Form::textarea('about',null,['class'=>'form-control'])!!}
        </div>
        <div class="col">
      {!!Form::label('path','Работа')!!}<br>
      {!!Form::file('path') !!} 
      {!!Form::submit('Опубликовать',['class'=>'btn btn-primary btn-lg btn-block'])!!}
      </div>
           
     
     
    {!!Form::close()!!} 
  </div>
  </div>
 </div>

</div>
@endsection