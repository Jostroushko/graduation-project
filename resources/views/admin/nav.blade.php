  <div class="row">
    <div class="col-lg-2 col-sm-10">
    
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
    <ul class="navbar-nav">
      <li class="nav-item {{ Request::is('admin/*') ? 'active' : '' }}">
        <a class="nav-link" href="{{URL::to('admin/')}}">Главная</a>
      </li>
      <li class="nav-item {{ Request::is('admin/zayavki*') ? 'active' : '' }}"><a class="nav-link"  href="{{URL::to('admin/zayavki/')}}">Заявки</a></li>
       <li class="nav-item {{ Request::is('admin/posts*') ? 'active' : '' }}"><a class="nav-link"  href="{{URL::to('admin/posts/')}}">Все посты</a></li>
       <li class="nav-item {{ Request::is('admin/posts/create*') ? 'active' : '' }}"><a class="nav-link"  href="{{URL::to('admin/posts/create')}}">Создать новый пост</a></li>
       <li class="nav-item {{ Request::is('admin/price*') ? 'active' : '' }}"><a class="nav-link"  href="{{URL::to('admin/price')}}">Прейскурант</a></li>
        <li class="nav-item {{ Request::is('admin/price/create*') ? 'active' : '' }}"><a class="nav-link"  href="{{URL::to('admin/price/create')}}">Создать услугу</a></li>
        <li class="nav-item {{ Request::is('admin/portfolio*') ? 'active' : '' }}"><a class="nav-link"  href="{{URL::to('admin/portfolio/')}}">Портфолио</a></li>
        <li class="nav-item {{ Request::is('admin/portfolio/create*') ? 'active' : '' }}"><a class="nav-link"  href="{{URL::to('admin/portfolio/create')}}">Добавить работу</a></li>
        <li class="nav-item {{ Request::is('admin/category*') ? 'active' : '' }}"><a class="nav-link"  href="{{URL::to('admin/category/')}}">Категории</a></li>
        <li class="nav-item {{ Request::is('admin/category/create*') ? 'active' : '' }}"><a class="nav-link"  href="{{URL::to('admin/category/create')}}">Создать категорию</a></li>
        <li class="nav-item {{ Request::is('admin/backpic/1/edit*') ? 'active' : '' }}"><a class="nav-link"  href="{{URL::to('admin/backpic/1/edit')}}">Обновить фон</a></li>
        <li class="nav-item {{ Request::is('admin/updinfo/1/edit*') ? 'active' : '' }}"><a class="nav-link"  href="{{URL::to('admin/updinfo/1/edit')}}">Обновить информацию о себе</a></li>
        <li class="nav-item {{ Request::is('admin/profile*') ? 'active' : '' }}"><a class="nav-link"  href="{{URL::to('admin/profile')}}">Пользователи</a></li>
        <li class="nav-item back-link"><a class="nav-link "  href="{{URL::to('/')}}"> Назад на сайт</a></li>
      </ul>
  </div>
</nav>
       
    </div>
 
  