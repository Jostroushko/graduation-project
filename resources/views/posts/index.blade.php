@extends('layout')
@section('content')
<main role="main" class="inner cover">
        <h1 class="cover-heading">Сайт фотографа</h1>
        <p class="lead">Деятельность в области фотографии и видеосьемки</p>
        <p class="lead">
          <a href="{{URL::to('/zayavki')}}" class="btn btn-lg btn-secondary">Оставить заявку</a>
        </p>
      </main>
@endsection