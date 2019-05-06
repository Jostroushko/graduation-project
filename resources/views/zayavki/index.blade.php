@extends('showform')
@section('content')
<main role="main"">
    <div class="form-group">
            @if (session()->has('message'))
            <div class="alert alert-info">{{ session('message') }}</div>
        @endif
            <div class="header-h3">
                    <h3>Оставить заявку</h3>
                  </div>
<div class="container">
    <div class="row ">
        <div class="col">
        {!! Form::open() !!}

        {!!Form::label('email', 'E-mail:')!!}
        {!!Form::input('email','email','',['class'=>'form-control', 'placeholder'=>'E-mail'])!!}

        {!!Form::label('fio', 'ФИО')!!}
        {!!Form::input('text','fio','',['class'=>'form-control', 'placeholder'=>'ФИО'])!!}

        {!!Form::label('tema', 'Тема заявки:')!!}
        {!!Form::input('text','tema','',['class'=>'form-control', 'placeholder'=>'Тема заявки'])!!}
        {!!Form::label('price_id','Вид заявки: ')!!}
        {!!Form::select('price_id', $price_list, null, ['class' => 'form-control'])!!}
    </div>
    <div class="col">
       
        {!!Form::label('z_text', 'Текст заявки:')!!}
        {!!Form::textarea('z_text','',['class'=>'form-control', 'placeholder'=>'Текст заявки'])!!}

        {!!Form::submit('Отправить заявку',['class'=>'btn btn-primary btn-lg btn-block'])!!}

        {!! Form::close() !!}
    </div>
    </div>
    </div>
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
    <script>
            $(function(){
                window.setTimeout(function(){
                    $('#my-alert').alert('close');
                },10000);
            });
        </script>
      </main>
@endsection