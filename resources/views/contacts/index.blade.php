@extends('pages')
@section('content')
<div class="container" style="background:white">
   <h2> {{$info->title}}</h2>
   <div class="col">
       {!!$info->body!!}
   </div>
    {{-- <h2>Информация</h2>

<p>Регион: г. Черногорск, Республика Хакасия</p>

<p>Телефон: нет данных</p>

<p>Факс: нет данных</p>

<p>E-mail: просмотр недоступен *</p>

<p>Сайт: просмотр недоступен *</p>

<p>Тип: Индивидуальный предприниматель</p>

<p>График работы: Пн-Пт: 9-20, Сб-Вс: 11-14</p> --}}
</div>
@endsection