<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Пример на bootstrap 4: Простой одностраничный шаблон для фотогалереи, портфолио и многого другого. Версия v4.5">

    <title>Car-Import | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
</head>

<body>

    <script defer>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-4481610-59', 'auto');
    ga('send', 'pageview');
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
            k, a)
    })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(39705265, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
    </script> <noscript>
        <div><img src="https://mc.yandex.ru/watch/39705265" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript> <!-- /Yandex.Metrika counter -->

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-8588635311388465",
        enable_page_level_ads: true
    });
    </script>


    @include('partials.header')
    @yield('content')
    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>