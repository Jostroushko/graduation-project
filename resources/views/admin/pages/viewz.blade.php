@extends('admin.pages.page')
@section('content')
@include('admin.nav')
    <div class="col-10 adm-content adm">
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
            <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>№</th>
                    <th>ФИО</th>
                    <th>Email</th>
                    <th>Тема заявки</th>
                    <th>Услуга</th>
                    <th>Стоимость услуги</th>
                    <th>Текст заявки</th>
                    <th>Дата создания</th>
                    <th>Действие</th>
                    
                  </tr>
                </thead>
                <tbody>
                 
                
        @foreach ($zayavkis as $zayavka)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $zayavka->fio }}</td>
                <td>{{ $zayavka->email }}</td>
                <td>{{ $zayavka->tema }}</td>
                <td>{{ $zayavka->price->title }}</td>
                <td>{{ $zayavka->price->cash }}</td>
                <td>{{ $zayavka->z_text }}</td>
                <td>{{ $zayavka->created_at }}</td>
                <td>{!!Form::open(['method'=>'DELETE', 'route'=>['zayavka.delete',$zayavka->id]])!!}
                  {!!Form::submit('удалить',['class'=>'btn btn-danger btn-lg btn-block'])!!}
                  {!!Form::close()!!}</td>
            </tr>
        @endforeach
                </tbody>
                  </table>
            </div>
                    {{ $zayavkis->links() }}
       </div>

    </div>

@endsection

