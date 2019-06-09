@extends('regularuser.pages.page')
@section('content')
@include('regularuser.nav')
<div class="col-10 adm-content adm">
        <div class="col desc">
<div class="card">
        <div class="card-body">
            <h4 class="card-title">Ваш логин: {{Auth::user()->name}}</h4>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Ваш e-mail: {{Auth::user()->email}}</li>
            <li class="list-group-item">Ваш город: {{!empty(Auth::user()->city_id) ? $user->city->name : 'нет'}}</li>
            <li class="list-group-item">Ваше имя: {{ !empty(Auth::user()->fio) ? Auth::user()->fio : 'нет'}}</li>
            <li class="list-group-item">Ваш номер телефона: {{ !empty(Auth::user()->tel) ? Auth::user()->tel : 'нет'}}</li>
            <li class="list-group-item {{ Auth::user()->userstatus->id== 1 ? 'text-success' : '' }}">Статус клиента: {{Auth::user()->userstatus->name}}</li>
            <li class="list-group-item {{ Auth::user()->discount > 0 ? 'text-success' : 'text-danger' }}">Ваша скидка: {{ Auth::user()->discount!=='' ? Auth::user()->discount." %" : 'нет'}}</li>
        </ul>
    </div>
        </div>
</div>
@endsection