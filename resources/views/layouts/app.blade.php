<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        /* Mantén el estilo existente */
        body {
            font-family: 'Karla', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        footer {
            background-color: #343a40;
            color: #f8f9fa;
            text-align: center;
            padding: 15px 0;
        }

        footer a {
            color: #ffc107;
            text-decoration: none;
        }

        footer a:hover {
            color: #f8f9fa;
        }

        .animated-header {
        animation: zoom-in-out 2s ease-in-out infinite; /* Animación infinita */
        font-weight: bold;
        color: #ffc107; /* Amarillo */
        text-shadow: 0 0 5px #ffc107, 0 0 10px #ff6f00; /* Resplandor suave */
        }

        @keyframes zoom-in-out {
            0%, 100% {
                transform: scale(1); /* Tamaño normal */
            }
            50% {
                transform: scale(1.1); /* Zoom */
            }
        }

        footer a i {
            transition: transform 0.2s, color 0.2s;
        }

        footer a i:hover {
            transform: scale(1.2); /* Efecto de zoom */
            color: #f8f9fa; /* Cambia el color a blanco al pasar el cursor */
        }
    </style>
</head>
<body class="bg-dark text-white">

    <!-- Header -->
    <header class="text-center">
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container">
                <a class="text-warning navbar-brand" href="{{ url('/') }}"><strong>Desarrollo Web Full Stack I</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('doctores.index') }}">Doctores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('especialidades.index') }}">Especialidades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pacientes.index') }}">Pacientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('medicinas.index') }}">Medicinas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Contenido -->
    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container py-4">
            <div class="row">
                <!-- Información Institucional -->
                <div class="col-md-6 text-start">
                    <p class="text-warning mb-1"><strong>Tecnológico Nacional de México</strong></p>
                    <p class="mb-1">Instituto Tecnológico de la Laguna</p>
                    <p class="mb-1">Desarrollo Web Full Stack I Ago-Dic 2024</p>
                    <p class="mb-0">Diego Muñoz Rede 21130893</p>
                </div>
                
                <!-- Enlaces Personales -->
                <div class="col-md-6 text-end">
                    <p class="mb-1">Conecta conmigo:</p>
                    <a href="https://mx.linkedin.com/in/diego-mu%C3%B1oz-rede-329019291" class="text-warning me-3" target="_blank">
                        <i class="bi bi-linkedin" style="font-size: 1.5rem;"></i> <!-- Ícono LinkedIn -->
                    </a>
                    <a href="https://github.com/dgmnzrd" class="text-warning" target="_blank">
                        <i class="bi bi-github" style="font-size: 1.5rem;"></i> <!-- Ícono GitHub -->
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
</body>
</html>