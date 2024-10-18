<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Crear Nueva Canción</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background: linear-gradient(45deg, #6a11cb 0%, #2575fc 100%);
        }
        .btn-primary {
            background-color: #2575fc;
            border-color: #2575fc;
        }
        .btn-primary:hover {
            background-color: #1a5fcc;
            border-color: #1a5fcc;
        }
        .btn-success {
            background-color: #00c853;
            border-color: #00c853;
        }
        .btn-success:hover {
            background-color: #00a844;
            border-color: #00a844;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background: lightsteelblue;
            border-radius: 15px 15px 0 0 !important;
            color: #333;
        }
        footer {
            background: linear-gradient(45deg, #6a11cb 0%, #2575fc 100%);
        }
        .form-control:focus {
            border-color: #2575fc;
            box-shadow: 0 0 0 0.2rem rgba(37, 117, 252, 0.25);
        }
        .btn {
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="#!">Sound Cloud</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('canciones.index') }}">Inicio</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content-->
    <div class="container mt-5">
        <div class="card shadow-sm rounded">
            <div class="card-header">
                <h1 class="mb-0">Crear Nueva Canción</h1>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('canciones.store') }}" method="POST" class="mt-4">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ingresa el nombre de la canción" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="artistas">Artistas</label>
                        <input type="text" name="artistas" class="form-control" placeholder="Ingresa los nombres de los artistas" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="album">Álbum</label>
                        <input type="text" name="album" class="form-control" placeholder="Ingresa el nombre del álbum" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="duracion">Duración</label>
                        <input type="text" name="duracion" class="form-control" placeholder="Ingresa la duración (ej. 3:45)" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="imgportada">Imagen de Portada (URL)</label>
                        <input type="text" name="imgportada" class="form-control" placeholder="Ingresa la URL de la imagen" required>
                    </div>

                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-music-note-beamed me-2"></i>Guardar Canción
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="py-4 mt-5">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>