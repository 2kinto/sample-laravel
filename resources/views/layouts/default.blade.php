<!DOCTYPE html>
<html>
<head>
    {{--yield 有两个参数 第一个是该区块的变量名 第二个参数是默认值--}}
    <title>@yield('title','Sample App')- Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')

    <div class="container">
        <div class="col-md-offset-1 col-md-10"></div>
        @include('shared.messages')
        @yield('content')
        @include('layouts._footer')
    </div>

    <script src="/js/app.js"></script>
</body>
</html>