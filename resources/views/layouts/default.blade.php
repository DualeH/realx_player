<!DOCTYPE html>
<html lang="cn">

<head>
    <title>@yield('title', 'RealX') - 课程系统</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    @include('layouts._header')

    <div id="container" class="container">
        @include('shared._messages')
        @yield('content')
    </div>
    @include('layouts._footer')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>