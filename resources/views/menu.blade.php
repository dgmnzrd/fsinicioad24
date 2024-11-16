<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Karla:400' rel='stylesheet'>
    <style>
        body {
            font-family: 'Karla';
            background-color: rgb(32, 32, 32);
        }

        .blink {
            animation: blinker 1.5s linear infinite;
            color: #808080;
            font-family: 'Karla';
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

        .catalogo-link {
            color: oldlace; /* Color del enlace cuando no ha sido presionado */
            text-decoration: none; /* Elimina el subrayado del enlace */
        }

        .catalogo-link:visited {
            color: thistle; /* Color del enlace después de ser presionado */
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menú</title>
</head>
<body>
    <marquee id="marquee" class="blink" behavior="scroll" direction="right", scrollamount="20">
        <h1 id="h1" style="color: white">Menú</h1>
    </marquee>
    <h3><a href="{{route('medicinas.index')}}" class="catalogo-link">Catalogo de medicinas</a></h3>
    <h3><a href="{{route('doctores.index')}}" class="catalogo-link">Catalogo de doctores</a></h3>
    <h3><a href="{{route('especialidades.index')}}" class="catalogo-link">Catalogo de especialidades</a></h3>
    <h3><a href="{{route('pacientes.index')}}" class="catalogo-link">Catalogo de pacientes</a></h3>
</body>
</html>