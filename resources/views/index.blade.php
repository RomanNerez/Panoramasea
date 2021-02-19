<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Гостевой дом PanoramaSea (https://panoramasea.ru/) +7-918-250–44-55. Адрес: г. Сочи, Лазаревский район, п. Лазаревское, ул. Сочинское шоссе, 6/5б">
    <meta name="keywords" content="Coчи, отдых в Сочи, курорты Сочи, отдых в Лазаревское, отель в Краснодарском крае">
    <title>PanoramaSea Guest House</title>
    <link rel="stylesheet" href="{{ asset('public/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css?v='.$version) }}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168914712-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-168914712-1');
    </script>
</head>
<body>
    <div id="page__wrapper"><App></App></div>
    



    
    
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <script src="{{ asset('public/js/slick.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('public/js/main.js?v='.$version) }}"></script>


    
    <script src="{{ asset('public/js/manifest.js') }}"></script>
    <script src="{{ asset('public/js/vendor.js') }}"></script>
    <script src="{{ asset('public/js/panoramasea.js?v='.$version) }}"></script>
    <script>
        function ibg(){
            let ibg=document.querySelectorAll(".ibg");
            for (var i = 0; i < ibg.length; i++) {
                if(ibg[i].querySelector('img')){
                    ibg[i].style.backgroundImage = 'url('+ibg[i].querySelector('img').getAttribute('src')+')';
                    }
                }
            }

        ibg();
    </script>


</body>
</html>