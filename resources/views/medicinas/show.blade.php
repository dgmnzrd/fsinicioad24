@extends( 'layouts.app' )
@section( 'content' )
<title>Info de la Medicina</title>
    <div class="animated-header text-center my-3">
        <h1>Info de la Medicina</h1>
    </div>
    <div class="container mt-4">
        <a href="{{ route('medicinas.index') }}" class="btn btn-light mb-3">Regresar</a>
        <div class="card bg-secondary text-white">
            <div class="card-body">
                <p><strong>Clave:</strong> {{$medicina->CLAVE}}</p>
                <p><strong>Nombre:</strong> {{$medicina->NOMBRE}}</p>
                <p><strong>Precio:</strong> {{$medicina->PRECIO}}</p>
            </div>
        </div>
    </div>
@endsection
