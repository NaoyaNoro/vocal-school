<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NORO Vocal School</title>
    <link rel="icon" href="storage/img/begginners.png" >
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>


<body>
    <header class="header">
        <div class="header__top">
            <div class="header__ttl">
                <a href="/" class="header__logo">
                    <h1>
                        <img src="{{ asset('storage/img/logo.png') }}" alt="Vocal Logo">
                    </h1>
                </a>
            </div>
            <div class="heder__nav">
                <div class="nav__item">
                    <a class="nav__item--link" href="">ホーム</a>
                </div>
                <div class=" nav__item">
                    <a class="nav__item--link" href="">Youtube</a>
                </div>
                <div class="nav__item">
                    <a class="nav__item--link" href="">お問い合わせ</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>