@extends('admin.pages.page')
@section('content')
@include('admin.nav')
<div class="col-10 adm-content adm">
    @if (session()->has('success-del'))
    <div class="alert alert-denger">{{ session('success-del') }}</div>
@endif 
    
    <div class="col desc">
        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>№</th>
                <th>Наименование</th>
                <th>Описание</th>
                <th>Стоимость</th>
                <th>Дата создания</th>
                <th>Действие</th>
                
              </tr>
            </thead>
            <tbody>
                      
                @foreach ($price as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->title }}</td>
            <td>{{ $p->body }}</td>
            <td>{{ $p->cash }}</td>
            <td>{{ $p->created_at }}</td>
            <td><a href="{{URL::to('admin/price/'.$p->id)}}">Изменить</a></td>
        </tr>
    @endforeach
            </tbody>
              </table>
        </div>
                {{ $price->links() }}
        </div>
   </div>
</div>
<div class="container">
        @if (session()->has('success-del'))
        <div class="alert alert-denger">{{ session('success-del') }}</div>
    @endif 
@endsection

