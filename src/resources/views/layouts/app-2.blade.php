<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app-2.css')}}">
    @yield('css')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(function(){
        $('.hamburger').click(function(){
        $('.header__app-name, .main').toggle();
        $('body, .header, .hamburger, .slide-menu').toggleClass('active');
        });});
        </script>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="hamburger">
            <!-- ハンバーガーメニューの線 -->
                <span class="icon1"></span>
                <span class="icon2"></span>
                <span class="icon3"></span>
            <!-- /ハンバーガーメニューの線 -->
            </div>
            <h1 class="header__app-name">
                <a href="">Rese</a>
            </h1>
        </div>
        <ul class="slide-menu">
            <li><a href="/">Home</a></li>
            <li><a href="/register">Registration</a></li>
            <li><a href="/mypage">Login</a></li>
        </ul>
        
    </header>
    <main class="main">
        <div class="main__inner">
        @yield('content')
        </div>
    </main>
</body>
</html>
