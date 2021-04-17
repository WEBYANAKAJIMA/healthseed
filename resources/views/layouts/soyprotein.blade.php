<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- meta -->
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <meta name="viewport" content="width=768,minimal-ui">
        <title>売上高世界No1の高品質ソイプロテイン｜20%OFF SALE</title>
        <meta name="description" content="ボディメイク・美容目的にオススメな売上高世界No1の高品質ソイプロテイン!日本を超える品質管理基準+αの実績、最高のアミノ酸バランス・消化吸収、100%植物由来のタンパク質の高品質ソイプロテイン!今なら20%OFFでお買い求め頂けます!" />
        <meta name="robots" content="noindex,nofollow" />
        <meta name="keywords" content="ソイプロテイン,ボディメイク,美容">

        <!-- ogp -->
        <meta property="og:title" content="売上高世界No1の高品質ソイプロテイン｜20%OFF SALE" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="ページの URL" />
        <meta property="og:image" content="サムネイル画像の URL" />
        <meta property="og:site_name" content="Halth Seed -健康商品ポータルサイト-" />
        <meta property="og:description" content="ボディメイク・美容目的にオススメな売上高世界No1の高品質ソイプロテイン!日本を超える品質管理基準+αの実績、最高のアミノ酸バランス・消化吸収、100%植物由来のタンパク質の高品質ソイプロテイン!今なら20%OFFでお買い求め頂けます!" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body id='top' class='Meiryo lg:text-16px lg:leading-28px md:text-32px md:leading-58px'>
      @yield('header')
      @yield('content')
      @yield('footer')
    </body>
</html>
