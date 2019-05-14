<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Сайт фотографа</title>
{{-- trying --}}
 <link href="https://fonts.googleapis.com/css?family=Cormorant+SC" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
 <link href="{{ asset('css/admin/cover.css') }}" rel="stylesheet">
 <SCRIPT type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></SCRIPT>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/portfolio.js') }}"></script>
{{-- endtrying --}}

{{-- Include summernote-ru-RU --}}
<script type="text/javascript" src="{!! asset('modules/summernote/lang/summernote-ru-RU.js') !!}"></script>

    <!-- Custom styles for this template -->
   
    
  </head>

  <body class="text-center">

    <div class="container">
      {{-- @include('../../layouts.nav') --}}
      
      @yield('content')

     @include ('../../layouts.footer')
    </div> 
    
    <script>

      $(document).ready(function() {
      
          $('#editor-body').summernote({
            lang:'ru-RU',
            height:300,
            placeholder:'Введите данные',
            
            fontNames:['Arial','Times New Roman','Helvetica'],
            disableDragAndDrop:true
          });
      
      });
      
      </script>
  </body>
</html>

