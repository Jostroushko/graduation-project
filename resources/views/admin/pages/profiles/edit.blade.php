@extends('admin.pages.page')
@section('content')
@include('admin.nav')
<div class="col-10 adm-content adm">
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
         
             
             <div class="row">           
            <div class="col">
                {!!Form::model($user, array('route' => array('profil.update', $user->id), 'method'=>'PUT'))!!}
                <h2>Информация о пользователе</h2>
                <p>E-mail: {{$user->email}}</p>
                <p>Город: {{$user->city_id !==NULL ? $user->city->name: 'нет'}}</p>
                <p>Имя: {{ $user->fio!=='' ? $user->fio : 'нет'}}</p>
                <p>Номер телефона: {{  $user->tel!=='' ? $user->tel : 'нет'}}</p>
                <h2>Редактировать профиль</h2>
                {!!Form::label('discount', 'Введите скидку:')!!}
                {!!Form::text('discount',null,['class'=>'form-control'])!!}  
                {!!Form::label('userstatus_id','Статус клиента: ')!!}
                <select name="userstatus_id" class="form-control">
                    @foreach ($userstatus_list as $c)
                        <option class='form-control' data-title="{{ $c->name }}" {{$c->id ==$user->userstatus_id ? 'selected' : ''}} value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                    </select>
                {!!Form::submit('Обновить информацию',['class'=>'btn btn-primary btn-lg btn-block mt-4'])!!}
            {!!Form::close()!!}
            </div>
            
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
    @endsection