<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Сайт фотографа</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <SCRIPT type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
    <script type="text/javascript" src="{{ URL::asset('js/portfolio.js') }}"></script>
    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+SC" rel="stylesheet"> 
    <link href="{{ asset('css/pages/cover.css') }}" rel="stylesheet">
    
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
     
      @include('layouts.nav')
      
      @yield('content')

     @include ('layouts.footer')
   
    </div>
  </body>
</html>
