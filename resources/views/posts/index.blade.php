@extends('layout')
@section('content')
<main role="main" class="inner cover">
        <h1 class="cover-heading">Фотограф Дельвер Р.А.</h1>
        <p class="lead">художественное фото и альбомы для школ и детских садов</p>
        <p class="lead">
          @if (Auth::check())
            
          @if (Auth::user()->hasRole('ROLE_REGULAR')== true)
          <a class="btn btn-lg btn-secondary" href="{{URL::to('/home')}}">Личный кабинет</a>
          @else
          <a class="btn btn-lg btn-secondary" href="{{URL::to('/zayavki')}}">Оставить заявку</a>
          @endif 
          @else
          <a class="btn btn-lg btn-secondary" href="{{URL::to('/zayavki')}}">Оставить заявку</a>
          
          @endif    
        </p>
      </main>
@endsection