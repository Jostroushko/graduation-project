@extends('homereg')
@section('content')
@include('regularuser.nav')
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
        <p>Ваш email: {{Auth::user()->email}}</p>

        @if (Auth::user()->tel !=="")
            <p>Ваш номер телефона: {{Auth::user()->tel}}</p>
            @else
            {!!Form::label('doptel', 'Введите номер телефона:')!!}
            {!!Form::input('text','doptel','',['class'=>'form-control', 'placeholder'=>'Номер телефона'])!!}  
        @endif

        @if (Auth::user()->fio !== "")
        <p>Ваше имя: {{Auth::user()->fio}}</p>
        @else
        {!!Form::label('fio', 'Введите ФИО:')!!}
        {!!Form::input('text','fio','',['class'=>'form-control', 'placeholder'=>'ФИО'])!!} 
        @endif
        
    </div>
    <div class="col">
       {!!Form::label('price_id','На что похож ваш заказ: ')!!}
        {{-- {{ Form::select('price_id', $price_list,['class' => 'form-control'])}} --}}
        <select name="price_id" class="form-control">
            @foreach ($price_list as $p)
                <option data-title="{{ $p->title }}" value="{{ $p->id }}">{{ $p->title }}: {{ $p->cash }} руб</option>
            @endforeach
            </select>

        {!!Form::label('tema', 'Тема заявки:')!!}
        {!!Form::input('text','tema','',['class'=>'form-control', 'placeholder'=>'Тема заявки'])!!}
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