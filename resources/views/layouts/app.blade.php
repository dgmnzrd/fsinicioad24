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
        /* General */
        body {
            font-family: 'Karla', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-color: #212529;
            color: #f8f9fa;
        }

        main {
            flex: 1;
            padding-bottom: 1rem;
            animation: fade-in 1.5s ease-in; /* Animación de entrada */
        }

        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Navbar */
        header .navbar {
            background: linear-gradient(45deg, #6c757d, #495057);
            animation: gradient-shift 6s infinite alternate;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
        }

        @keyframes gradient-shift {
            0% {
                background: linear-gradient(45deg, #6c757d, #495057);
            }
            100% {
                background: linear-gradient(45deg, #495057, #6c757d);
            }
        }

        header .navbar-brand {
            position: relative;
            overflow: hidden;
            animation: glow 2s ease-in-out infinite alternate;
        }

        header .navbar-brand::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background-color: #ffc107;
            animation: slide-line 2s infinite ease-in-out;
        }

        @keyframes glow {
            0% {
                text-shadow: 0 0 5px #ffc107, 0 0 10px #ff6f00;
            }
            100% {
                text-shadow: 0 0 15px #ffc107, 0 0 25px #ff6f00;
            }
        }

        @keyframes slide-line {
            0%, 100% {
                left: -100%;
            }
            50% {
                left: 100%;
            }
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            color: #ffc107;
            margin-top: 1rem;
            animation: zoom-glow 2.5s infinite alternate;
        }

        @keyframes zoom-glow {
            0%, 100% {
                transform: scale(1);
                text-shadow: 0 0 10px #ffc107, 0 0 20px #ff6f00;
            }
            50% {
                transform: scale(1.1);
                text-shadow: 0 0 20px #ffc107, 0 0 30px #ff6f00;
            }
        }

        /* Navbar Links */
        .nav-link {
            position: relative;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .nav-link:hover {
            color: #ffc107;
            transform: scale(1.2);
        }

        .nav-link::before {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: #ffc107;
            transition: width 0.3s, left 0.3s;
        }

        .nav-link:hover::before {
            width: 100%;
            left: 0;
        }

        /* Footer */
        footer {
            background: #343a40;
            color: #f8f9fa;
            text-align: center;
            padding: 15px 0;
            margin-top: auto;
        }

        footer a {
            color: #ffc107;
            text-decoration: none;
            transition: color 0.3s, transform 0.3s;
            position: relative;
        }

        footer a:hover {
            color: #f8f9fa;
            transform: scale(1.2);
        }

        footer a::before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: #ffc107;
            transition: width 0.3s, left 0.3s;
        }

        footer a:hover::before {
            width: 100%;
            left: 0;
        }

        footer i {
            transition: transform 0.3s, color 0.3s;
        }

        footer a:hover i {
            color: #ffc107;
            transform: rotate(360deg);
        }

        p.text-warning {
            animation: color-cycle 4s infinite alternate;
        }

        @keyframes color-cycle {
            0% { color: #ffc107; }
            25% { color: #ff6f00; }
            50% { color: #ffffff; }
            75% { color: #ff6f00; }
            100% { color: #ffc107; }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="text-center">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand text-warning" href="{{ url('/') }}">
                    <strong>Desarrollo Web Full Stack I</strong>
                </a>
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

    <!-- Main Content -->
    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6 text-start">
                    <p class="text-warning mb-1"><strong>Tecnológico Nacional de México</strong></p>
                    <p class="mb-1">Instituto Tecnológico de la Laguna</p>
                    <p class="mb-1">Desarrollo Web Full Stack I Ago-Dic 2024</p>
                    <p class="mb-0">Diego Muñoz Rede 21130893</p>
                </div>
                <div class="col-md-6 text-end">
                    <p class="mb-1">Conecta conmigo:</p>
                    <a href="https://mx.linkedin.com/in/diego-mu%C3%B1oz-rede-329019291" class="text-warning me-3" target="_blank">
                        <i class="bi bi-linkedin" style="font-size: 1.5rem;"></i>
                    </a>
                    <a href="https://github.com/dgmnzrd" class="text-warning" target="_blank">
                        <i class="bi bi-github" style="font-size: 1.5rem;"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
</body>
</html>
