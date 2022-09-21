<html>

<head>
    <title>RPL - @yield('title')</title>
    @yield('headscript')
</head>

<body>
    <header>
        <h2>RPL Blog</h2>
    </header>
    <nav>
        <a href="/blog">Home</a>
        |
        <a href="/blog/about">About</a>
        |
        <a href="/blog/contact">Contact</a>
    </nav>
    <hr>
    <br>
    <h3>@yield('judul_halaman')</h3>

    @yield('content')
    <br>
    <br>
    <hr>
    <footer>
        <h3>&copy; 2022 RPL SMKN 1 Bawang</h3>
    </footer>
    @yield('bodyscript')
</body>

</html>