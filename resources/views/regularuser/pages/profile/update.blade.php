@extends('regularuser.pages.page')
@section('content')
@include('regularuser.nav')
<div class="col-lg-10 col-sm-12 adm-content adm">
    <div class="col desc">
            @if (session()->has('success'))
            <div class="alert alert-info">{{ session('success') }}</div>
        @endif
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
      @if (Auth::user()->id == $user->id)
         <h2>Редактировать профиль</h2>
         <div class="row">           
        <div class="col-md-6">
            {!!Form::model($user, array('route' => array('profile.update', $user->id), 'method'=>'PUT'))!!}
            {!!Form::label('name', 'Введите логин:')!!}
            {!!Form::text('name',null,['class'=>'form-control'])!!}  
            {!!Form::label('fio', 'Введите ФИО:')!!}
            {!!Form::input('text','fio',null,['class'=>'form-control'])!!} 
            {!!Form::label('email','Ваш e-mail: ')!!}
            {!!Form::email('email',null,['class'=>'form-control'])!!} 
            {!!Form::label('city_id','Ваш город: ')!!}
            <select name="city_id" class="form-control">
                @foreach ($city_list as $c)
                    <option class='form-control' data-title="{{ $c->name }}" {{$c->id ==$user->city_id ? 'selected' : ''}} value="{{ $c->id }}">{{ $c->name }}</option>
                @endforeach
                </select>
        </div>
        <div class="col-md-6">
                {!!Form::label('password', 'Пароль:')!!}
                {!!Form::input('password','password',null,['class'=>'form-control'])!!}
            {!!Form::label('password_confirmation', 'Подтвердите пароль:')!!}
            {!!Form::input('password','password_confirmation',null,['class'=>'form-control'])!!}
            {!!Form::label('tel', 'Номер телефона:')!!}
            {!!Form::text('tel',null,['class'=>'form-control','pattern'=>'+7[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}'])!!}
            {!!Form::submit('Обновить информацию',['class'=>'btn btn-primary btn-lg btn-block mt-4'])!!}
        {!!Form::close()!!} </div>
    </div>
        @else
        <p>у вас нет прав на это действие</p>
        @endif
    </div>
    </div>
<script>
            $(function(){
                window.setTimeout(function(){
                    $('#my-alert').alert('close');
                },10000);
            });
</script>
@endsection