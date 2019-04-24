@extends('layout')
@section('content')
<div class="row">
                               
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th>№</th>
                    <th>Наименование</th>
                    <th>Описание</th>
                    <th>Стоимость</th>
                    
                  </tr>
                </thead>
                <tbody>
                 
                
                    @foreach ($price as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->title }}</td>
                <td>{{ $p->body }}</td>
                <td>{{ $p->cash }}</td>
            </tr>
        @endforeach
                </tbody>
                  </table>
                    {{ $price->links() }}
       </div> 
@endsection