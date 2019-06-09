@extends('admin.pages.page')
@section('content')
@include('admin.nav')
    <div class="col-lg-10 col-sm-12 adm-content adm">
        @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('success-delz'))
                <div class="alert alert-danger">
                    {{ session('success-delz') }}
                </div>
            @endif
            <div class="row">
                    <div class="col-lg-3 col-sm-12">
                            <div class="card">
                                <h4 class="card-title">Заявки:</h4>
                                   <ul class="nav">
                                        @forelse ($archives as $item) 
                                       <li class="nav-item"><a class="nav-link" href="zayavki/?month={{$item->month}}&year={{$item->year}}">
                                            {{$item->monthRU}} {{$item->year}} ({{$item->number}})
                                        </a></li>
                                        @empty
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true"><a >
                                    Здесь ничего нет
                                </a>
                                @endforelse 
                                   </ul>
                               </div>
                           </div>
        
        
        
                    <div class="col-lg-9 col-sm-12">
                          
                                @foreach ($zayavka as $r)
                                <div class="card"> 
                              <div class="card-body row">
                                    <div class="col-lg-3 col-sm-12 bg-secondary text-white">
                                <p>ФИО: {{ $r->fio }}</p>
                                <p>Вид: {{ $r->price->title }}</p>
                                <p>Номер: 
                                    @if ($r->doptel == NULL)
                                {{App\User::find($r->user_id)->tel}}
                                @else
                                {{ $r->doptel }}
                                    @endif
                                    </p>   
                                    @if ($r->email == NULL)
                                    <p>E-mail: {{App\User::find($r->user_id)->email}}</p>
                                    @else
                                    <p>E-mail: {{ $r->email }}</p>
                                        @endif
                                        @if ($r->email == NULL)
                                        <p>Логин юзера: {{App\User::find($r->user_id)->name}}</p>
                                            @endif
                                      

                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <h4 class="card-title">{{ $r->tema }}</h4>
                                <p>{{$r->z_text}}</p>
                                <p><a href="{{URL::to('admin/zayavki/'.$r->id.'/edit')}}">редактировать</a></p>
                                
                            </div>
        
                                <div class="col-lg-3 col-sm-12">
                                <p class="text-white {{ $r->status->id == 1 ? 'bg-success' : $r->status->id == 2 ? 'bg-dark' : 'bg-primary' }}">Статус: {{ $r->status->ready }}</p> 
                                <p>Дата создания: {{ $r->created_at }}</p>
                                <p>{!!Form::open(['method'=>'DELETE', 'route'=>['zayavka.delete',$r->id]])!!}
                                  {!!Form::submit('удалить',['class'=>'btn btn-danger btn-lg btn-block'])!!}
                                  {!!Form::close()!!}</p>
                                
                                </div>
                              </div>
                          </div>
                                @endforeach 
                           
                          
                          {{ $zayavka->links() }}
                        </div>
                        </div>
       </div>

    </div>
    <script> $(function () {
            var location = window.location.href;
            var cur_url = 'zayavki/?'+location.split('/zayavki?').pop();
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

