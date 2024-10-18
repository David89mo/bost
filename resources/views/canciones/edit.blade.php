<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Editar Canción - Sound Cloud</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
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
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #000;
        }
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #e0a800;
            color: #000;
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('canciones.index') }}">Inicio</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="card shadow-sm rounded">
                <div class="card-header">
                    <h1 class="display-5 fw-bold mb-0">Editar Canción</h1>
                </div>
                <div class="card-body">
                    <p class="fs-4">Por favor, completa el formulario a continuación para editar la canción.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-5">
            <div class="card shadow-sm rounded">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('canciones.update', $cancion->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $cancion->nombre) }}" required>
                            @error('nombre')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="artistas">Artistas</label>
                            <input type="text" name="artistas" class="form-control" value="{{ old('artistas', $cancion->artistas) }}" required>
                            @error('artistas')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="album">Álbum</label>
                            <input type="text" name="album" class="form-control" value="{{ old('album', $cancion->album) }}" required>
                            @error('album')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="duracion">Duración</label>
                            <input type="text" name="duracion" class="form-control" value="{{ old('duracion', $cancion->duracion) }}" required>
                            @error('duracion')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="imgportada">Imagen de Portada (URL)</label>
                            <input type="text" name="imgportada" class="form-control" value="{{ old('imgportada', $cancion->imgportada) }}" required>
                            @error('imgportada')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-warning">
                            <i class="bi bi-pencil-square me-2"></i>Actualizar Canción
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-4 mt-5">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Sound Cloud 2023</p>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>