@extends('homeadmin')
@section('content')
@include('admin.nav')
<div class="container">
        <div class="row">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
                <div class="col-lg-4 col-md-4 col-sm-12 adm">
                 {{-- <img align="center" src="images\fancy-pants.jpg" class="img-fluid"> --}}
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 desc">
                  
                 <h3>Добро пожаловать в панель администратора!</h3>
                 <p>
                    
                 </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 adm">
                        {{-- <img align="center" src="images\fancy-pants.jpg" class="img-fluid"> --}}
                       </div>
               </div>
  
    </div>

@endsection

