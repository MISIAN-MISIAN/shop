<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>shop</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- Styles -->

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
  <header>
    <div class="header-top">
      <h1 class="title">shop</h1>
      <ul class="menus">
        <li class="menu">新規登録</li>
        <li class="menu">ログイン</li>
      </ul>
    </div>
  </header>
  <body>
    
    
    @yield('content')
  
  </body>
</html>