<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Pig @yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="{{ asset('index.js') }}"></script>
</head>
<body>
<header>
    @section('menu')
    <nav role="navigation">
        <div id="menuToggle">     
            <input type="checkbox" />    
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <li>@yield('username')</li>
                <li><a href="/">首頁</a></li>
                <li><a href="/profile">個人檔案</a></li>
                <li><a href="/order">歷史訂單</a></li>
                <li><a href="/address">地址</a></li>
                <li><a href="/payment">付款方式</a></li>
                <li><a href="/coupon">優惠券</a></li>
                <li><a href="/customerService">客服中心</li></a></li>
                <li><a href="logout">登出</a></li>
            </ul>
        </div>
    </nav>
    @show
    <a href="/" style="margin: 0 auto"><img src="{{ asset('pig.avif') }}" alt=""></a>
    @section('img')
    @show
</header>
@section('content')
@show
</body>
</html>