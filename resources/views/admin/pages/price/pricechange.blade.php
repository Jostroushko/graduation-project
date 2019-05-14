@extends('admin.pages.page')
@section('content')
@include('admin.nav')
<div class="col-10 adm-content adm">
    <div class="col desc">
    <div class="form-group">
    {!!Form::open(['route'=>'price.store'])!!}
   
        <h2>Добавить</h2>
        {!!Form::label('title','Заголовок')!!}
        {!!Form::text('title',null,['class'=>'form-control'])!!}
        {!!Form::label('body','Описание')!!}
        {!!Form::text('body',null,['class'=>'form-control'])!!}
        {!!Form::label('cash','Стоимость')!!}
        {!!Form::text('cash',null,['class'=>'form-control'])!!}
         
        {!!Form::submit('Добавить',['class'=>'btn btn-primary btn-lg btn-block'])!!}
    {!!Form::close()!!} 

    @if ($errors->any())
 
 <div id="my-alert" class="alert alert-danger alert-dismissible fade show" role="alert">
      @foreach ($errors->all() as $error)  
     {{$error}}<br> 
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
           
            @endif
</div>
    </div>
   </div>
   <script>
    $(function(){
        window.setTimeout(function(){
            $('#my-alert').alert('close');
        },10000);
    });
</script>
</div>
@endsection