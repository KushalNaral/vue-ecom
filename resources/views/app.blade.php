<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="icon" href="{{asset('images/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('fonts/flaticon/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('fonts/icofont/icofont.min.css')}}" />
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/fontawesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/venobox/venobox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/slickslider/slick.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/niceselect/nice-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('css/user-auth.css')}}">



    @inertiaHead
</head>
<body class="font-sans antialiased">
    @inertia

    @env ('local')
    <script src="http://localhost:8080/js/bundle.js"></script>
    @endenv



    <script src="{{asset('vendor/bootstrap/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor/countdown/countdown.min.js')}}"></script>
    <script src="{{asset('vendor/niceselect/nice-select.min.js')}}"></script>
    <script src="{{asset('vendor/slickslider/slick.min.js')}}"></script>
    <script src="{{asset('vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('js/nice-select.js')}}"></script>
    <script src="{{asset('js/countdown.js')}}"></script>
    <script src="{{asset('js/accordion.js')}}"></script>
    <script src="{{asset('js/venobox.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>


</body>
</html>
