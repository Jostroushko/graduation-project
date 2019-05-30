<div class="row">
        <div class="col-2">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item {{ Request::is('home/*') ? 'active' : '' }}">
            <a class="nav-link" href="{{URL::to('home/')}}">Главная</a>
          </li>
          <li class="nav-item {{ Request::is('home/zayavki*') ? 'active' : '' }}"><a class="nav-link"  href="{{URL::to('home/zayavki/')}}">Заявки</a></li>
           <li class="nav-item {{ Request::is('home/mail*') ? 'active' : '' }}"><a class="nav-link"  href="{{URL::to('home/posts/')}}">Все посты</a></li>
           <li class="nav-item {{ Request::is('home/profile*') ? 'active' : '' }}"><a class="nav-link"  href="{{URL::to('home/posts/create')}}">Создать новый пост</a></li>
            <li class="nav-item back-link"><a class="nav-link "  href="{{URL::to('/')}}"> Назад на сайт</a></li>
          </ul>
      </div>
    </nav>
           
        </div>