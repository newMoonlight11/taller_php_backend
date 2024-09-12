<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Profile</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('index') ? 'active' : '' }}"
                            href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('intereses') ? 'active' : '' }}"
                            href="{{ route('intereses') }}">Intereses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('habilidades') ? 'active' : '' }}"
                            href="{{ route('habilidades') }}">Habilidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('metas') ? 'active' : '' }}"
                            href="{{ route('metas') }}">Metas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mt-5 mb-5 bg-bground">
        @yield('content')
    </main>
    <footer class="footer text-center text-dark bg-light">
        <div class="container">
            <section class="mb-1">
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.instagram.com/cam.ddesigns/" target="_blank" role="button"
                    data-mdb-ripple-color="dark"><i class="bi bi-instagram"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.linkedin.com/in/camvzr22/?profileId=ACoAADBath0BHmOY8ByjgLRLh5yv4o5N-FRirKE" target="_blank" role="button"
                    data-mdb-ripple-color="dark"><i class="bi bi-linkedin"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://github.com/newMoonlight11" target="_blank" role="button"
                    data-mdb-ripple-color="dark"><i class="bi bi-github"></i></a>
            </section>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
