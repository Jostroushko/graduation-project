<header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Фотограф Дельвер Р.А.</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link {{ Request::is('/*') ? 'active' : '' }}" href="{{URL::to('/')}}">Главная</a>
            <a class="nav-link {{ Request::is('portfolio*') ? 'active' : '' }}" href="{{URL::to('/portfolio')}}">Работы</a>
            <a class="nav-link {{ Request::is('price*') ? 'active' : '' }}" href="{{URL::to('/price')}}">Прейскурант</a>
            <a class="nav-link {{ Request::is('contacts*') ? 'active' : '' }}" href="{{URL::to('/contacts')}}">Контакты</a>
            <a class="nav-link {{ Request::is('posts*') ? 'active' : '' }}" href="{{URL::to('/posts')}}">Новости</a>
           @if (Auth::check())
            
          @if (Auth::user()->hasRole('ROLE_REGULAR')== true)
          <a class="nav-link {{ Request::is('home*') ? 'active' : '' }}" href="{{URL::to('/home')}}">Личный кабинет</a>
          @else
          <a class="nav-link {{ Request::is('zayavki*') ? 'active' : '' }}" href="{{URL::to('/zayavki')}}">Оставить заявку</a>
          @endif 
          @else
          <a class="nav-link {{ Request::is('zayavki*') ? 'active' : '' }}" href="{{URL::to('/zayavki')}}">Оставить заявку</a>
          
          @endif    
          </nav>
          <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
        </div>
</header>