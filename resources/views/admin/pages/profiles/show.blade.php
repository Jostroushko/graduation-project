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
                <th>Логин</th>
                <th>ФИО</th>
                <th>Email</th>
                <th>Номер телефона</th>
                <th></th>
                
                
              </tr>
            </thead>
            <tbody>
                
                @foreach ($prof as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->fio }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->tel }}</td>
        <td><a href="{{URL::to('admin/profile/'.$p->id.'/edit')}}" class="btn btn-default">редактировать</a></td>
            
        </tr>
    @endforeach
            </tbody>
              </table>
        </div>
                {{ $prof->links() }}
        </div>
   </div>
</div>
<div class="container">
        @if (session()->has('success-del'))
        <div class="alert alert-denger">{{ session('success-del') }}</div>
    @endif 
@endsection