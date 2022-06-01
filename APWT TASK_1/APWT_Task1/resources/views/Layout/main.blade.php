<html>
    <head></head>
    <body>
        <div>
        <a href="{{route('Page.landingPage')}}">Home</a>
        <a href="{{route('Page.about')}}">About</a>
        <a href="{{route('Page.contact')}}">Contact</a>
        <a href="{{route('Products.service')}}">Product List</a>

        </div>
        @yield('content')
    </body>
</html>