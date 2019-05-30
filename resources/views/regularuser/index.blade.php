@extends('homereg')
@section('content')
@include('regularuser.nav')
<div class="col-10 adm-content adm">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        
        <div class="col desc">
          
         <h3>Добро пожаловать в личный кабинет</h3>
         <div class="card">
                <!-- Изображение -->
                <img class="card-img-top" src="..." alt="...">
                <!-- Текстовый контент -->
                <div class="card-body">
                    <h4 class="card-title">{{Auth::user()->name}}</h4>
                    <p class="card-text">{{Auth::user()->email}}</p>
                </div>
                <!-- Список List groups -->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{Auth::user()->city->name}}</li>
                    <li class="list-group-item">{{Auth::user()->userstatus->name}}</li>
                    <li class="list-group-item">3...</li>
                </ul>
                <!-- Текстовый контент -->
                <div class="card-body">
                    <a href="#" class="card-link">Ссылка №1</a>
                    <a href="#" class="card-link">Ссылка №2</a>
                </div>
            </div><!-- Конец карточки -->
        
        </div>
       </div>

    </div>
@endsection