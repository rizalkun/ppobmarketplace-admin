
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
    <title>Authentification | Admin PPOB</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('/assets/css/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('/assets/css/theme.css') }}">
    <link id="skin-theme" rel="stylesheet" href="{{ asset('/assets/css/skins/theme-blue.css') }}">
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">

                        @yield('content')

                        <div class="nk-split-content nk-split-stretch bg-abstract"></div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('/assets/js/bundle.js') }}"></script>
    <script src="{{ asset('/assets/js/scripts.js')}}"></script>

</html>
