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
    <SCRIPT type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></SCRIPT>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
    <link href="https://fonts.googleapis.com/css?family=Cormorant+SC" rel="stylesheet"> 
    <!-- Custom styles for this template -->
    <link href="css/regular/cover.css" rel="stylesheet">
    
  </head>

  <body class="text-center">

    <div class="container">
      {{-- @include('layouts.nav') --}}
      
      @yield('content')

<div class="row">
  <div class="col">
     @include ('layouts.footer')
    </div>
    </div>
    </div>
  </body>
  <script type="text/javascript">
    $(".contain").on("click", function() {
      $(this).find(".burger").toggleClass("full-nav");
      $(".menu").toggleClass("open");
    })</script>
</html>