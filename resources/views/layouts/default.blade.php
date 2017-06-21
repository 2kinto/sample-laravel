<!DOCTYPE html>
<html>
<head>
    {{--yield 有两个参数 第一个是该区块的变量名 第二个参数是默认值--}}
    <title>@yield('title','Sample')- Laravel</title>
</head>
<body>
    @yield('content')
</body>
</html>