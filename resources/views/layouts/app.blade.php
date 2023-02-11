<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('components.head')
</head>

<body>
    <div id="app">

        @include('components.header')
       

        <main class="container_home">
            @yield('content')
            @yield('list-project')
            @yield('projectShow')
            @yield('projectGuestShow')
            @yield('projectCreate')
            @yield('projectEdit')

            
        </main>
    </div>
</body>

</html>
