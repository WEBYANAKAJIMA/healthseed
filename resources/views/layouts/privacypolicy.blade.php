<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- meta -->
        <meta charset="utf-8">

        <meta name="viewport" content="width=768,minimal-ui">
        <title>Halth Seed -健康商品ポータルサイト-｜プライバシーポリシー</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body id='top' class='Meiryo lg:text-16px lg:leading-28px md:text-32px md:leading-58px'>
      @yield('header')
      @yield('content')
      @yield('footer')
    </body>
</html>
