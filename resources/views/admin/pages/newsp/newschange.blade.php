@extends('admin.pages.page')
@section('content')
@include('admin.nav')

<div class="col-lg-10 col-sm-12 adm-content adm">
    <div class="col desc">
      
        {!!Form::open(['route'=>'posts.store','enctype' => 'multipart/form-data'])!!}
        <div class="form-group">
            <h2>Новый пост</h2>
                {!!Form::label('title','Заголовок')!!}
                {!!Form::text('title',null,['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                    {!!Form::label('body','Текст')!!}
                    {!!Form::textarea('body','',['class'=>'form-control', 'id' => 'editor-body'])!!}
                    {!!Form::file('path') !!}
                    
              </div>
              {!!Form::submit('Опубликовать пост',['class'=>'btn btn-primary btn-lg btn-block'])!!}
        {!!Form::close()!!}
    
    </div>
   </div>

</div>

  
@endsection