<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="{!! asset('css/styles.css') !!}">

    <style>
        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: var(--bs-nav-pills-link-active-color);
            background-color: transparent;
            border: solid 1px black;
        }
    </style>

    <title>@yield('title','PWA')</title>
</head>

<body data-bs-theme='light'>

<!-- Menu -->
<nav class="navbar navbar-expand-lg" id="nav">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/Logo.png') }}" style="width: 80px;" /> Taekwondo 2023</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link buttonNav" href="/" name="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link buttonNav" href="/cargarComp" name="cargarComp">Cargar competidor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link buttonNav" href="/timer" name="timer">Timer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link buttonNav" href="/video" name="video">Video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link buttonNav" href="/bancoImagenes" name="bancoImagenes">Banco de imágenes</a>
                </li>
                <button id="darkBtn" class="btn rounded-fill"><i id="icon" class="bi bi-moon-fill"></i></button>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenido de cada seccion -->
<div class="container">
    @yield('contenido')
</div>

<!-- Pie de Pagina -->
<footer>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">© 2023 Grupo A - PWA</div>
</footer>

<script src="{{ asset('js/index_dom.js') }}" type="module"></script>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>