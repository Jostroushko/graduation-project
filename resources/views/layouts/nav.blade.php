<header class="masthead mb-auto">
        <div class="inner">
          {{-- <h3 class="masthead-brand">Сайт фотографа</h3> --}}
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link {{ Request::is('/*') ? 'active' : '' }}" href="{{URL::to('/')}}">Главная</a>
            <a class="nav-link {{ Request::is('portfolio*') ? 'active' : '' }}" href="{{URL::to('/portfolio')}}">Работы</a>
            <a class="nav-link {{ Request::is('price*') ? 'active' : '' }}" href="{{URL::to('/price')}}">Прейскурант</a>
            <a class="nav-link {{ Request::is('contacts*') ? 'active' : '' }}" href="{{URL::to('/contacts')}}">Контакты</a>
            <a class="nav-link {{ Request::is('posts*') ? 'active' : '' }}" href="{{URL::to('/posts')}}">Новости</a>
            <a class="nav-link {{ Request::is('zayavki*') ? 'active' : '' }}" href="{{URL::to('/zayavki')}}">Оставить заявку</a>
            
          </nav>
          <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
        </div>
</header>