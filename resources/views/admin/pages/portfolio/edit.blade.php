@extends('admin.pages.portfolio.portfolio')
@section('content')
@include('admin.pages.portfolio.nav')
    {!!Form::model($portfolio, array('route' => array('portfolio.update', $portfolio->id), 'method'=>'PUT','enctype' => 'multipart/form-data'))!!}
    <div class="form-group">
        <h2>Новая работа</h2>
            {!!Form::label('title','Заголовок')!!}
            {!!Form::text('title',null,['class'=>'form-control'])!!}
          </div>
          {!!Form::select('category_id[]', $category_list, $category->id, ['class' => 'form-control'])!!}
          {!!Form::file('path') !!}
          <div class="form-group">
                {!!Form::label('about','Текст')!!}
                {!!Form::textarea('about',null,['class'=>'form-control'])!!}
          </div>
          {!!Form::submit('Опубликовать',['class'=>'btn btn-primary btn-lg btn-block'])!!}
    {!!Form::close()!!}
@endsection