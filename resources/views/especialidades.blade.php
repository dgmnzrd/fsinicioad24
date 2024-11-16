<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Karla:400' rel='stylesheet'>
    <style>
        body {
            font-family: 'Karla';
            background-color: rgb(32, 32, 32);
        }

        button {
            background-color: #646464; 
            border-radius: 16px;
            color: whitesmoke;
            font-family: 'Karla';
            padding: 10px 22px;
            text-align: center;
            text-decoration: none;
            transition-duration: 0.4s;
            display: inline-block;            
        }

        button:hover {
            background-color: whitesmoke; 
            color: black;
            box-shadow: 0 12px 16px 0 rgba(255, 255, 255, 0.24), 0 17px 50px 0 rgba(255, 255, 255, 0.19);
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

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: rgb(56, 56, 56);
        }

        tr, td {
            color: whitesmoke;
            border: 1px solid whitesmoke;
            padding: 10px;
            text-align: left;
        }

        th {
            color: whitesmoke;
            border: 1px solid whitesmoke;
            padding: 10px;
            text-align: center;
            background-color: rgb(48, 48, 48);
        }

        .pagination {
            margin-top: 20px;
            text-align: center;
        }

        .pagination .inline-flex {
            display: inline-flex;
        }

        .pagination a {
            color: whitesmoke;
            padding: 8px 16px;
            text-decoration: none;
        }

        .pagination span {
            color: whitesmoke;
            padding: 8px 16px;
            text-decoration: none;
        }

        .pagination a:hover {
            background-color: whitesmoke; 
            color: black;
            box-shadow: 0 12px 16px 0 rgba( 255, 255, 255, 0.24 ), 0 17px 50px 0 rgba( 255, 255, 255, 0.19 );
        }

        p {
            color: whitesmoke;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Especialidades</title>
</head>
<body>
    <marquee id="marquee" class="blink" behavior="scroll" direction="right", scrollamount="20">
        <h1 id="h1" style="color: white">Lista de Especialidades</h1>
    </marquee>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
        </tr>
        @foreach ( $especialidades as $especialidad )
        <tr>
            <td>{{ $especialidad->id }}</td>
            <td>{{ $especialidad->nombre }}</td>
            <td>{{ $especialidad->descripcion }}</td>
        </tr>
        @endforeach
    </table> 

    <div class="pagination">
        {{ $especialidades->links() }}
    </div>
</body>
</html>