@extends('admin.pages.page')
@section('content')
@include('admin.nav')
<div class="col-10 adm-content adm">
    <div class="col desc">
      
        {!!Form::model($post, array('route' => array('posts.update', $post->id), 'method'=>'PUT'))!!}
        <div class="form-group">
            <h2>Редактировать пост</h2>
                {!!Form::label('title','Заголовок')!!}
                {!!Form::text('title',null,['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                    {!!Form::label('body','Текст')!!}
                    {!!Form::textarea('body',null,['class'=>'form-control', 'id' => 'editor-body'])!!}
              </div>
              {!!Form::submit('Опубликовать пост',['class'=>'btn btn-primary btn-lg btn-block'])!!}
        {!!Form::close()!!}
    
    </div>
   </div>

</div>

   
@endsection