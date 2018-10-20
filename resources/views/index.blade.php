<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl">

<head>
    <title> Mintorship Program | @yield('title')</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="StudyPress | Education & Courses HTML Template" />
    <meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
    <meta name="author" content="ThemeMascot" />

    @include('_includes._head')
    @yield('stylesheets')
</head>

<body class="rtl">
    <div id="wrapper" class="clearfix">
        <!-- preloader -->
        <div id="preloader" style="display: none;">
            <div id="spinner">
                <div class="preloader-dot-loading">
                    <div class="cssload-loading"></div>
                </div>
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div>
    </div>

    @include('_includes._navbar')

    <div class="main-content">
        @yield('content')
    </div>

    @include('_includes._footer')

    @include('_includes._javascript')
    @include('_includes._messages')


    @yield('scripts')

    <script>
        $('.dropdown-toggle').dropdown()

    </script>
</body>

</html>
