<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Lista de Canciones" />
    <meta name="author" content="Juan David" />
    <title>Lista de Canciones</title>
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
        .table {
            border-collapse: separate;
            border-spacing: 0 10px;
        }
        .table thead th {
            border-bottom: none;
            color: #6a11cb;
        }
        .table tbody tr {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        .table tbody tr:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-warning, .btn-danger {
            border-radius: 20px;
        }
        footer {
            background: linear-gradient(45deg, #6a11cb 0%, #2575fc 100%);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container px-lg-5">
            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-light" style="border-radius: 20px;">Cerrar sesión</button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </nav>
  
    <!-- Content -->
    <div class="container mt-5">
        <h1 class="text-center mb-4" style="color: #6a11cb; font-weight: bold;">Lista de Canciones</h1>

        <a href="{{ route('canciones.create') }}" class="btn btn-success mb-3" style="border-radius: 20px;">
            <i class="bi bi-plus-circle me-2"></i>Agregar Nueva Canción
        </a>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-sm rounded">
            <div class="card-header">
                <h3 class="card-title mb-0">Canciones Registradas</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Artistas</th>
                            <th>Álbum</th>
                            <th>Duración</th>
                            <th>Imagen de Portada</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($canciones as $cancion)
                            <tr>
                                <td>{{ $cancion->nombre }}</td>
                                <td>{{ $cancion->artistas }}</td>
                                <td>{{ $cancion->album }}</td>
                                <td>{{ $cancion->duracion }}</td>
                                <td><img src="{{ $cancion->imgportada }}" alt="Portada" style="width: 50px; height: 50px; border-radius: 50%;"></td>
                                <td>
                                    <a href="{{ route('canciones.edit', $cancion->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil me-1"></i>Editar
                                    </a>
                                    <form action="{{ route('canciones.destroy', $cancion->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash me-1"></i>Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="py-4 mt-5">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>