@extends('homereg')
@section('content')
@include('regularuser.nav')
<div class="col-10 adm-content adm">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        
        <div class="col">
          
         <h3>Добро пожаловать в личный кабинет</h3>
         <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ваш логин: {{Auth::user()->name}}</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Ваш e-mail: {{Auth::user()->email}}</li>
                    <li class="list-group-item">Ваш город: {{Auth::user()->city->name}}</li>
                    <li class="list-group-item {{ Auth::user()->userstatus->id== 1 ? 'text-success' : '' }}">Статус клиента: {{Auth::user()->userstatus->name}}</li>
                </ul>
            </div><!-- Конец карточки --> 
        </div>
<div class="row">
            <div class="col-3">
                    <div class="card">
                        <h4 class="card-title">Ваши заявки:</h4>
                           <ul class="nav">
                                @forelse ($archives as $item) 
                               <li class="nav-item"><a class="nav-link" href="home/?month={{$item->month}}&year={{$item->year}}">
                                    {{$item->monthRU}} {{$item->year}} 
                                </a></li>
                                @empty
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true"><a >
                            Здесь ничего нет
                        </a>
                        @endforelse 
                           </ul>
                       </div>
                   </div>



            <div class="col-9">
                  
                        @foreach ($regz as $r)
                        <div class="card"> 
                      <div class="card-body row">
                            <div class="col-3 bg-secondary text-white">
                        <p>ФИО: @if ($r->fio == NULL)
                                {{Auth::user()->fio}}
                                @else
                                {{ $r->fio }}
                                    @endif</p>
                        <p>Вид: {{ $r->price->title }}</p>
                        <p>Номер: 
                            @if ($r->doptel == NULL)
                        {{Auth::user()->tel}}
                        @else
                        {{ $r->doptel }}
                            @endif
                            </p>   
                    </div>
                    <div class="col-6">
                        <h4 class="card-title">{{ $r->tema }}</h4>
                        <p>{{ str_limit($r->z_text , 100)}}<a href="{{URL::to('home/zayavki/'.$r->id.'/edit')}}" class="text-primar">читать далее...</a></p>
                        
                    </div>

                        <div class="col-3">
                        <p class="text-white {{ $r->status_id== 1 ? 'bg-success' : $r->status_id == 2 ? 'bg-dark' : 'bg-primary' }}">Статус: {{ $r->status->ready }}</p> 
                        <p>Дата создания: {{ $r->created_at }}</p>
                        <p>{!!Form::open(['method'=>'DELETE', 'route'=>['zayavki.destroy',$r->id]])!!}
                          {!!Form::submit('удалить',['class'=>'btn btn-danger btn-lg btn-block'])!!}
                          {!!Form::close()!!}</p>
                        
                        </div>
                      </div>
                  </div>
                        @endforeach 
                   
                  
                  {{ $regz->links() }}
                </div>
                </div>
        </div>
       </div>
      <script> $(function () {
        var location = window.location.href;
        var cur_url = 'home/?'+location.split('/home?').pop();
        console.log(cur_url);
        $('ul.nav li').each(function () {
            var link = $(this).find('a').attr('href');
            console.log(link);
            if (cur_url == link) {
                $(this).addClass('current');
            }
        });
    });</script>
@endsection