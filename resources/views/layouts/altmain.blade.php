<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- dois layots iguais pois em um deles tem um css exclusivo para a main-->
</head>

<body class="text-center">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <img class="mb-4" src="https://i.ibb.co/f05mMSF/userlmn-91ef61f2da60060491f29582ee2b407e.png" alt="" width="170" height="57">

            <div class="d-flex align-items-center">
                @auth
                <button type="button" class="btn btn-link px-3 me-2">
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout"
                         class="nav-link" 
                             onclick="event.preventDefault();
                             this.closest('form').submit();">Sair</a>
                    </form>
                </button>
                @endauth
            </div>
        </div>
        <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    @yield('content')
</body>

</html>