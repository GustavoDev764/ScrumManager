<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Scrum Manager">
    <meta name="author" content="Gustavo José">
    
    <title>{{ $titlePage ?? 'unknown' }}</title>

   
    <!-- Bootstrap styles for this template-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

   
  </head>
  <body>
    
    @yield("root")
    
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  
  </body>
</html>
