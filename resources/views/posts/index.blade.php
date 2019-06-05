@extends('layout')
@section('content')
<main role="main" class="inner cover">
        <h1 class="cover-heading">Фотограф Дельвер Р.А.</h1>
        <p class="lead">художественное фото и альбомы для школ и детских садов</p>
        <p class="lead">
          <a href="{{URL::to('/zayavki')}}" class="btn btn-lg btn-secondary">Оставить заявку</a>
        </p>
      </main>
@endsection