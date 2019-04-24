@extends('admin.pages.page')
@section('content')
@include('admin.pages.nav')
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
                  
                 <h3><font color="#212529">Добро пожаловать в панель администратора!</font></h3>
                 <p>
                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                 </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 adm">
                        {{-- <img align="center" src="images\fancy-pants.jpg" class="img-fluid"> --}}
                       </div>
               </div>
  
    </div>

@endsection

