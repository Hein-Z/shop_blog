<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ 'images/favicon.ico' }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    {{-- notify css --}}
    <link rel="stylesheet" href="{{ asset('notifIt/css/notifIt.min.css') }}">
    <title>Shop | Blog</title>
    @yield('extra-css')
</head>

<body>

    @yield('content')

    <script>
        window.APP_URL = `{{ env('APP_URL') }}`;
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('notifIt/js/notifIt.min.js') }}"></script>

    @yield('extra-js')
    <script>
        @if ($message = session()->has('success'))

            notif({type:'success',
            msg:'{{ session()->get('success') }}',
            position:'right',
            timeout: 3000,
            opacity :0.9,
            zindex:99999,});

        @endif

        @if ($message = session()->has('error'))

            notif({type:'warning',
            msg:'{{ session()->get('error') }}',
            position:'right',
            timeout: 3000,
            opacity :0.9,
            zindex:99999,});

        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)

                notif({type:'warning',
                msg:'{!! $error !!}',
                position:'right',
                timeout: 3000,
                opacity :0.9,
                zindex:99999,});
            @endforeach
        @endif
    </script>

</body>

</html>
