
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="/images/logo_1.svg">
    <!-- Page Title  -->
    <title>PPOB Marketplace Admin | Dashboard</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('/assets/css/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('/assets/css/theme.css') }}">
    <link id="skin-theme" rel="stylesheet" href="{{ asset('/assets/css/skins/theme-blue.css') }}">
    @stack('css')
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">

        <!-- main @s -->
        <div class="nk-main ">

            <!-- sidebar @s -->
            @include('layouts.sidebar')
            <!-- sidebar @e -->

            <!-- wrap @s -->
            <div class="nk-wrap ">

                <!-- main header @s -->
                @include('layouts.header')
                <!-- main header @e -->

                <!-- content @s -->
                @yield('content')
                <!-- content @e -->

                <!-- footer @s -->
                @include('layouts.footer')
                <!-- footer @e -->

            </div>
            <!-- wrap @e -->

        </div>
        <!-- main @e -->

    </div>
    <!-- app-root @e -->

    <!-- JavaScript -->
    <script src="{{ asset('/assets/js/bundle.js') }}"></script>
    <script src="{{ asset('/assets/js/scripts.js') }}"></script>
    @stack('js')
</body>

</html>
