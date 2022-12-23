<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">
    <title>Penitipan Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid d-flex justify-content-center position-relative">
            <a class="navbar-brand" href="#">Penitipan Barang</a>
            <button class="navbar-toggler btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- offcanvas-body --}}
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Username</h5>
                    <button type="button" class="btn-close btn-close-white" id="close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">Orders</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">Products</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">Customers</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="sidebar-content d-flex">
        <div class="p-3 text-white bg-dark sidebar" style="width: 280px; height: 100vh;">
            <a href="#" class="d-flex align-items-center mb-1 text-white text-decoration-none menu">
                <span class="fs-4">Username</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">Orders</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">Products</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">Customers</a>
                </li>
            </ul>
        </div>
        <div style="margin-top: 3.5rem">
            <div>@yield('content')</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>