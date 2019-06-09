@extends('homeadmin')
@section('content')
@include('admin.nav')
<div class="col-lg-10 col-sm-12  adm-content adm">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
                
                <div class="col desc">
                  
                 <h3>Добро пожаловать в панель администратора!</h3>
                
                </div>
               </div>
  
            </div>
@endsection

