<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container">
            <a class="navbar-brand text-light" href="/">ErlianMovie</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/mahasiswa">Watchlist</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </nav><br>
    <div class="container mt-4">
        @yield('content')
    </div>
    <footer class="bg-success text-white text-center py-3 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; Erlian Fir Dhani &mdash; 2201082026
            </div>
        </div>
    </div>
</footer>

</body>

</html>
