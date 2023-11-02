
<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">      
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>    
    <link rel="shortcut icon" href="/img/icon.jfif">
    <!-- 
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>      
    -->

    <style>
      .fakeimg { height: 100px; background: #aaa; }
      ::-webkit-scrollbar { display:none; }
    </style>

    <title>My INE project P1</title>
  </head>
<body>

@include('layouts.header')

@yield('content-center')
@yield('content-right')

@include('layouts.footer')


    <!-- Loading Javascripts -->   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"')></script></script>
    <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>