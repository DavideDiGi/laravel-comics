<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/js/app.js')
</head>

<body>

    @include('partials.header')

    <main class="bg-dark">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron">
                    @yield('jumbotron')
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="card-container col-12 d-flex flex-wrap">
                    @yield('main_content')
                </div>
            </div>
            <div class="load">
                <button class="lil button">LOAD MORE</button>
            </div>
        </div>
        <div class="row">
            <div class="topFooter col-12">
                @yield('merchandising')
            </div>
        </div>
    </main>

    @include('partials.footer')


</body>

</html>