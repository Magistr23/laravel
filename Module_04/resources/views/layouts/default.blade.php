<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div class="container">
        <header class="row" style="margin-bottom: 300px;">
            @include('includes.header')
        </header>
        <div class="row" id="main">
            @yield('content')
        </div>
        <footer class="row" style="margin-top: 300px;">
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>