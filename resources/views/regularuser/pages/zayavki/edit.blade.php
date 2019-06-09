@extends('regularuser.pages.page')
@section('content')
@include('regularuser.nav')
<div class="col-lg-10 col-sm-12 adm-content adm">
    <div class="col desc">
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
            @if (session()->has('success'))
            <div class="alert alert-info">{{ session('success') }}</div>
        @endif
      @if (Auth::user()->id == $zayavki->user_id)
      
        {!!Form::model($zayavki, array('route' => array('zayavki.update', $zayavki->id), 'method'=>'PUT'))!!}
        <div class="form-group">
            <h2>Редактировать заявку</h2>
            <p>Ваш email: {{Auth::user()->email}}</p>

            @if (!empty(Auth::user()->tel))
            
                <p>Ваш номер телефона: {{Auth::user()->tel}}</p>
                @else
                {!!Form::label('doptel', 'Введите номер телефона:')!!}
                {!!Form::text('doptel',null,['class'=>'form-control'])!!}  
            @endif
    
            @if (!empty(Auth::user()->fio))
            <p>Ваше имя: {{Auth::user()->fio}}</p>
            @else
            {!!Form::label('fio', 'Введите ФИО:')!!}
            {!!Form::input('text','fio',null,['class'=>'form-control'])!!} 
            @endif
            
        </div>
        <div class="col-md-6">
           {!!Form::label('price_id','На что похож ваш заказ: ')!!}
            <select name="price_id" class="form-control">
                @foreach ($price_list as $p)
                    <option data-title="{{ $p->title }}" {{$p->id ==$zayavki->price_id ? 'selected' : ''}} value="{{ $p->id }}">{{ $p->title }}: {{ $p->cash }} руб</option>
                @endforeach
                </select>
    
            {!!Form::label('tema', 'Тема заявки:')!!}
            {!!Form::input('text','tema',null,['class'=>'form-control'])!!}
            {!!Form::label('z_text', 'Текст заявки:')!!}
            {!!Form::textarea('z_text',null,['class'=>'form-control'])!!}
    
            {!!Form::submit('Отправить заявку',['class'=>'btn btn-primary btn-lg btn-block'])!!}
        {!!Form::close()!!} 
        @else
        <p>у вас нет прав на это действие</p>
        @endif
    </div>
    
    </div>
   </div>    
@endsection