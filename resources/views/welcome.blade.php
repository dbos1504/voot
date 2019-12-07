<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="/img/favicon.png">

        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">

        <meta property="og:url" content="@yield('location')">
        <meta property="og:type" content="article">
        <meta property="og:title" content="@yield('title-meta')">
        <meta property="og:description" content="@yield('description-meta')">
        <meta property="og:image" content="@yield('image')">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Montserrat:300,400|Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="app">
            <header id="myHeader" class="header nav-down {{ Request::route()->getName() == 'vorur' ||
                              Request::route()->getName() == 'contact' ||
                              Request::route()->getName() == 'sub' ||
                              Request::route()->getName() == 'cat' ||
                              Request::route()->getName() == 'product' ? 'shadow-sm' : '' }}">
                @include('layouts.header')
            </header>
            <main>
                @yield('content')
            </main>
            <footer>
                @include('layouts.footer')
            </footer>
        </div>
    </body>
</html>
<script src="/js/app.js"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "334px";
        document.getElementById("dugm").style.display = "block";
        document.getElementById("tet").style.display = "none";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("dugm").style.display = "none";
        document.getElementById("tet").style.display = "block";
    }
</script>
{{--<script>--}}
{{--    $('a[href^="#"]').on('click', function(event) {--}}
{{--        let target = $(this.getAttribute('href'));--}}
{{--        if( target.length ) {--}}
{{--            event.preventDefault();--}}

{{--            $('html, body').stop().animate({--}}
{{--                scrollTop: target.offset().top--}}
{{--            }, 1000);--}}
{{--        }--}}
{{--    });--}}

{{--    $('button.faq_dugme').click( function(e) {--}}
{{--        $('.collapse').collapse('hide');--}}
{{--        let target = $(this).parent().children('#accordion div.collapse');--}}
{{--        if (!target.is(":visible")) {--}}
{{--            $('#accordion div.collapse').slideUp();--}}
{{--            $(target).slideDown();--}}
{{--            $(this).children(".plus").toggleClass("plus, minus");--}}
{{--        }--}}
{{--        else {--}}
{{--            $(target).slideUp();--}}
{{--            $(this).children(".plus").toggleClass("plus, minus");--}}
{{--        }--}}
{{--    });--}}

{{--    $(document).ready(function(){--}}
{{--        // Add minus icon for collapse element which is open by default--}}
{{--        $(".collapse.show").each(function(){--}}
{{--            $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");--}}
{{--        });--}}

{{--        // Toggle plus minus icon on show hide of collapse element--}}
{{--        $(".collapse").on('show.bs.collapse', function(){--}}
{{--            $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");--}}
{{--        }).on('hide.bs.collapse', function(){--}}
{{--            $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--<script>--}}
{{--    function openNav() {--}}
{{--        document.getElementById("mySidenav").style.width = "334px";--}}
{{--        document.getElementById("dugm").style.display = "block";--}}
{{--        document.getElementById("tet").style.display = "none";--}}
{{--    }--}}

{{--    function closeNav() {--}}
{{--        document.getElementById("mySidenav").style.width = "0";--}}
{{--        document.getElementById("dugm").style.display = "none";--}}
{{--        document.getElementById("tet").style.display = "block";--}}
{{--    }--}}
{{--</script>--}}
{{--<script>--}}
{{--    $('.panel-collapse').on('show.bs.collapse', function () {--}}
{{--        $(this).siblings('.panel-heading').addClass('active');--}}
{{--    });--}}

{{--    $('.panel-collapse').on('hide.bs.collapse', function () {--}}
{{--        $(this).siblings('.panel-heading').removeClass('active');--}}
{{--    });--}}
{{--</script>--}}
