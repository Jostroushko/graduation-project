@extends('admin.pages.page')
@section('content')
@include('admin.nav')
<div class="col-lg-10 col-sm-12 adm-content adm">
     <div class="col desc">
              {!!Form::model($portfolio, array('route' => array('portfolio.update', $portfolio->id), 'method'=>'PUT','enctype' => 'multipart/form-data'))!!}
        <div class="form-group">
            <h2>Редактировать</h2>
                {!!Form::label('title','Заголовок')!!}
                {!!Form::text('title',null,['class'=>'form-control'])!!}
                {!!Form::label('category_id','Вид')!!}
              {!!Form::select('category_id', $category_list, null, ['class' => 'form-control'])!!}
                    {!!Form::label('about','Текст')!!}
                    {!!Form::textarea('about',null,['class'=>'form-control'])!!}
               {!!Form::label('path','Работа')!!}<br>
              {!!Form::file('path') !!}
              {!!Form::submit('Опубликовать',['class'=>'btn btn-primary btn-lg btn-block'])!!}
        {!!Form::close()!!}
    </div>
    </div>
   </div>

</div> 
@endsection