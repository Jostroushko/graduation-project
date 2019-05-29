@extends('admin.pages.page')
@section('content')
@include('admin.nav')
<div class="col-10 adm-content adm">
    <div class="col desc">
      
        {!!Form::model($info, array('route' => array('updinfo.update', $info->id), 'method'=>'PUT'))!!}
        <div class="form-group">
            <h2>Редактировать информацию о себе</h2>
                {!!Form::label('title','Заголовок')!!}
                {!!Form::text('title',null,['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                    {!!Form::label('body','Текст')!!}
                    {!!Form::textarea('body',null,['class'=>'form-control', 'id' => 'editor-body'])!!}
              </div>
              {!!Form::submit('Опубликовать',['class'=>'btn btn-primary btn-lg btn-block'])!!}
        {!!Form::close()!!}
    
    </div>
   </div>

</div>
@endsection