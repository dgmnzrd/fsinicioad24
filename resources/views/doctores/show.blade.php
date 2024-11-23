@extends( 'layouts.app' )
@section( 'content' )
<title>Info del Doctor</title>
    <div class="animated-header text-center my-3">
        <h1>Info del Doctor</h1>
    </div>
    <div class="container mt-4">
        <a href="{{ route('doctores.index') }}" class="btn btn-light mb-3">Regresar</a>
        <div class="card bg-secondary text-white">
            <div class="card-body">
                <p><strong>Nombre:</strong> {{$doctor->nombre}}</p>
                <p><strong>Apellido:</strong> {{$doctor->apellido}}</p>
                <p><strong>Especialidad:</strong> {{$doctor->especialidad}}</p>
            </div>
        </div>
    </div>
@endsection
