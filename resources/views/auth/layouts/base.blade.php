<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    {{-- font --}}
    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/style.css">
    @vite(['resources/js/app.js'])
</head>

<body>
    <nav class="navbar bg-white sticky-top border-bottom shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Oasis Mansa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-white" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Oasis Mansa</h5>
                    <button type="button" class="btn-close btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard') ? 'active px-2 bg-secondary bg-opacity-10 rounded' : '' }} " aria-current="page"
                                href="#"><i class="bi bi-house-door-fill"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="#"><i class="bi bi-person-video2"></i> Kelas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="#"><i class="bi bi-person-vcard-fill"></i> Absensi</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main class="bg-body-tertiary">@yield('container')</main>



</body>

</html>
