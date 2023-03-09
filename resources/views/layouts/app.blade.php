<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page_title')</title>

    @vite('resources/js/app.js')
</head>

<body>

    @include('partials.header')

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap">
                    @yield('main_content')
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')


</body>

</html>