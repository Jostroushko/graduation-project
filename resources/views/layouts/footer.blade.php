<footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Сайт создан <a href="#">jostroushko@gmail.com</a></p>
            @if (Auth::check())
          <p>Админ панель > <a href="/admin">перейти</a></p>
          <p>Покинуть управление > <a href="/logout">выход</a></p>
          <p><a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
          </a></p>
            @else
             <p><a class="nav-link" href="{{ route('login') }}">Вход</a></p>
           
            @endif
        </div>
      </footer>