<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{'images/favicon.ico'}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <title>Shop | Blog</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    @yield('extra-css')

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


@yield('content')

<script src="{{asset('js/app.js')}}"></script>
<script>
    $(document).ready(function () {
        if ($('#offset-pos').offset()) {
            $('html,body').animate({
                scrollTop: $("#offset-pos").offset().top + 380
            }, 100, 'swing');
        }
    });
</script>
@yield('extra-js')
</body>
</html>
