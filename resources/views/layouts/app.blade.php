<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HapoLearn</title>
    <link rel="shortcut icon" href="{{asset('app/img/icon.png')}}" type="image/png">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">--}}
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;700&family=Open+Sans:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="body-cus">
    <div class="viewport">
        @include('layouts.header')
        @yield('contentuser')
        @include('layouts.footer')
        @yield('iconmess')
        @yield('modallogin')
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
