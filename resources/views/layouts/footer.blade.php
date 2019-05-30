<footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Сайт создан <a href="#">jostroushko@gmail.com</a></p>
         
     @if (Auth::check())
          @if (Auth::user()->hasRole('ROLE_ADMIN')== true)
               <p>Админ панель > <a href="/admin">перейти</a></p>
          @endif      
              <p><a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
            <p> > <a href="/logout">выход</a></p>
          </a></p>
            @else
             <p><a class="nav-link" href="{{ route('login') }}">Вход</a></p>
      @endif
        </div>
      </footer>