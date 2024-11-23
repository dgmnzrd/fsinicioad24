@extends( 'layouts.app' )
@section( 'content' )
<title>Agregar Paciente</title>
    <div class="animated-header text-center my-3">
        <h1>Agregar Paciente</h1>
    </div>
    <div class="container mt-4">
        <a href="{{ route('pacientes.index') }}" class="btn btn-light mb-3">Regresar</a>
        <form id="miFormulario" action="{{ route('pacientes.store') }}" method="POST" class="bg-secondary p-4 rounded">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="form-control">
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="text" id="edad" name="edad" class="form-control">
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <input type="text" id="sexo" name="sexo" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
