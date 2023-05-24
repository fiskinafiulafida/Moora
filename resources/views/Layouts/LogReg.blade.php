<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('styleLog/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('styleLog/css/style.css')}}">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            @yield('section_up')
        </section>

        <!-- Sing in  Form -->
        <section class="sign-in">
            @yield('section')
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('styleLog/vendor/jquery/jquery.min.js')}}">
    </script>
    <script src="{{ asset('styleLog/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>