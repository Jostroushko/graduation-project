@extends('admin.pages.page')
@section('content')
@include('admin.nav')

<div class="col-lg-10 col-sm-12 adm-content adm">
    <div class="col desc">
      
        {!!Form::model($category, array('route' => array('category.update', $category->id), 'method'=>'PUT','enctype' => 'multipart/form-data'))!!}
        <div class="form-group">
            <h2>Редактировать категорию</h2>
                {!!Form::label('title','Заголовок')!!}
                {!!Form::text('title',null,['class'=>'form-control'])!!}
                {!!Form::label('path','Обложка категории')!!}<br>
                {!!Form::file('path') !!}
              {!!Form::submit('Готово',['class'=>'btn btn-primary btn-lg btn-block'])!!}
        {!!Form::close()!!}
    </div>
    
    </div>
   </div>

</div>

    
@endsection