<!DOCTYPE html>
<html>

<head>
  <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/app.css">
</head>

<body>
  @include('layouts._header')
  <div id="container" class="container">
  @yield('content')
  </div>
  @include('layouts._footer')
</body>

</html>