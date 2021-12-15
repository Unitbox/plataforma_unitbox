<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.css') }}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

    <style>
        .btn-theme-purple {
            color: #fff;
            background-color: #6f42c1;
            border-bottom: solid 5px #533190 !important;
        }

        .btn-theme-purple:hover {
            background-color: #18b9b6;
            color: white;
            border-bottom: solid 5px #2e7776 !important;
        }


        .font-weight-400 {
            font-weight: 400 !important;
        }

        .font-weight-600 {
            font-weight: 600 !important;
        }

        .font-weight-900 {
            font-weight: 900 !important;
        }

    </style>

</head>

<body class="antialiased font-sans">

    <!-- ========== HEADER ========== -->
    @include('web.modules.headerclear')
    <!-- ========== END HEADER ========== -->

    @yield('message')
</body>

</html>
