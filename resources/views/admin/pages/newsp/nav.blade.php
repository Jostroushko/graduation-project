<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('admin/')}}">Выберите пункт > <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{ Request::is('admin/zayavki*') ? 'active' : '' }}">
        <a class="nav-link" href="{{URL::to('admin/zayavki/')}}">Заявки</a>
      </li>
      <li class="nav-item {{ Request::is('admin/posts*') ? 'active' : '' }}">
          <a class="nav-link" href="">Новости</a>
          <ul class="submenu">
              <li><a href="{{URL::to('admin/posts/')}}">Все посты</a></li>
              <li><a href="{{URL::to('admin/posts/create')}}">Создать новый</a></li>
            </ul>
      </li>
      <li class="nav-item {{ Request::is('admin/price*') ? 'active' : '' }}">
          <a class="nav-link" href="../price/">Прейскурант</a>
      </li>
      <li class="nav-item {{ Request::is('admin/works*') ? 'active' : '' }}">
              <a class="nav-link" href="">Работы</a>
              <ul class="submenu">
                <li><a href="{{URL::to('admin/works/')}}">Портфолио</a></li>
                <li><a href="{{URL::to('admin/works/create')}}">Добавить работу</a></li>
                <li><a href="{{URL::to('admin/category/')}}">Категории</a></li>
                <li><a href="{{URL::to('admin/category/create')}}">Создать категорию</a></li>
              </ul>
      </li>
    </ul>
  </div>
</nav>