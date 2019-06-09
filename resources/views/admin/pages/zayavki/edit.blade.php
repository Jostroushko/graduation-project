@extends('admin.pages.page')
@section('content')
@include('admin.nav')
<div class="col-lg-10 col-sm-12 adm-content adm">
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
                {!!Form::model($zayavka, array('route' => array('zayavka.update', $zayavka->id), 'method'=>'PUT'))!!}
                <h2>Информация о заявке</h2>
                <div class="card"> 
                        <div class="card-body row">
                              <div class="col-lg-3 col-sm-12 bg-secondary text-white">
                          <p>ФИО: {{ $zayavka->fio }}</p>
                          <p>Вид: {{ $zayavka->price->title }}</p>
                          <p>Номер: 
                              @if ($zayavka->doptel == NULL)
                          {{App\User::find($zayavka->user_id)->tel}}
                          @else
                          {{ $zayavka->doptel }}
                              @endif
                              </p>   
                              @if ($zayavka->email == NULL)
                              <p>E-mail: {{App\User::find($zayavka->user_id)->email}}</p>
                              @else
                              <p>E-mail: {{ $zayavka->email }}</p>
                                  @endif
                                  @if ($zayavka->email == NULL)
                                  <p>Логин юзера: {{App\User::find($zayavka->user_id)->name}}</p>
                                      @endif
                                

                      </div>
                      <div class="col-lg-6 col-sm-12">
                          <h4 class="card-title">{{ $zayavka->tema }}</h4>
                          <p>{{$zayavka->z_text}}</p>                         
                      </div>
  
                          <div class="col-lg-3 col-sm-12">
                          <p>Дата создания: {{ $zayavka->created_at }}</p>
                          <p>{!!Form::open(['method'=>'DELETE', 'route'=>['zayavka.delete',$zayavka->id]])!!}
                            {!!Form::submit('удалить',['class'=>'btn btn-danger btn-lg btn-block'])!!}
                            {!!Form::close()!!}</p>
                          
                          </div>
                        </div>
                </div>
                <h2>Редактировать статус заявки</h2>
                <select name="status_id" class="form-control">
                    @foreach ($status_list as $c)
                        <option class='form-control' data-title="{{ $c->ready }}" {{$c->id ==$zayavka->status_id ? 'selected' : ''}} value="{{ $c->id }}">{{ $c->ready }}</option>
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