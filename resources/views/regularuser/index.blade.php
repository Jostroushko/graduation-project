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
                    <li class="list-group-item">Ваши заявки
                        <ul>
                            <li>тут сортировка</li>
                        </ul>
                        @foreach ($regz as $r)
                        <div class="card">
                                <!-- Текстовый контент -->
                                <div class="card-body">
                                            <p>{{ $loop->iteration }}</p>
                                            <p>{{ $r->fio }}</p>
                                            <p>{{ $r->tema }}</p>
                                            <p>{{ $r->doptel }}</p>
                                            <p>{{ $r->price->title }}</p>
                                            <p>{{ $r->price->cash }}</p>
                                            <p>{{ $r->z_text }}</p>
                                            <p>{{ $r->status->ready }}</p>
                                            <p>{{ $r->created_at }}</p>
                                            <p>{!!Form::open(['method'=>'DELETE', 'route'=>['zayavki.destroy',$r->id]])!!}
                                              {!!Form::submit('удалить',['class'=>'btn btn-danger btn-lg btn-block'])!!}
                                              {!!Form::close()!!}</p>
                                </div>
                            </div> 
                            @endforeach<!-- Конец карточки -->
                    </li>
                    {{ $regz->links() }}
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