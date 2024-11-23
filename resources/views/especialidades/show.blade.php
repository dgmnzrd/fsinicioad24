@extends( 'layouts.app' )
@section( 'content' )
<title>Info de la Especialidad</title>
    <div class="animated-header text-center my-3">
        <h1>Info de la Especialidad</h1>
    </div>
    <div class="container mt-4">
        <a href="{{ route('especialidades.index') }}" class="btn btn-light mb-3">Regresar</a>
        <div class="card bg-secondary text-white">
            <div class="card-body">
                <p><strong>Nombre:</strong> {{$especialidad->nombre}}</p>
                <p><strong>Descripción:</strong> {{$especialidad->descripcion}}</p>
            </div>
        </div>
    </div>
@endsection
