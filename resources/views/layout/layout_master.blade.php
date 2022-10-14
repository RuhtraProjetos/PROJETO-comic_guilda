<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('includes.head')
    <title></title>
</head>
<body>
    <div class="w-full h-full">
        <header class="">
            @include('includes.header')
        </header>
        <div id="main" class="">
            @yield('content')
        </div>
        <footer class="">
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>
