<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layout.style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
<div class="container">
    <header>
        <div class="header-main">
            <ul class="menu">
                <li><a href="{{BASE_URL}}list-product">Quản lý product</a></li>
                <li><a href="{{BASE_URL}}taikhoan/list-taikhoan">Quản lý tài khoản</a></li>
                <li><a href="{{BASE_URL}}list-student">Quản lý students</a></li>
                <li><a href="">Quản lý teachers</a></li>
                <li><a href="">Quản lý ô tô</a></li>
            </ul>
        </div>
    </header>
    <section class="content">
       @yield('content')
    </section>
    <footer>
        <span>FPT POLYTECNIC</span>
    </footer>
</div>
</body>
</html>

