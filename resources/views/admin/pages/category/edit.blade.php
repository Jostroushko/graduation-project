@extends('admin.pages.category.category')
@section('content')
@include('admin.pages.category.nav')
    {!!Form::model($category, array('route' => array('category.update', $category->id), 'method'=>'PUT','enctype' => 'multipart/form-data'))!!}
    <div class="form-group">
        <h2>Редактировать категорию</h2>
            {!!Form::label('title','Заголовок')!!}
            {!!Form::text('title',null,['class'=>'form-control'])!!}
            {!!Form::file('path') !!}
          {!!Form::submit('Готово',['class'=>'btn btn-primary btn-lg btn-block'])!!}
    {!!Form::close()!!}
</div>
@endsection