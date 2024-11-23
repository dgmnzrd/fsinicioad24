@extends( 'layouts.app' )
@section( 'content' )
<title>Agregar Especialidad</title>
    <div class="animated-header text-center my-3">
        <h1>Agregar Especialidad</h1>
    </div>
    <div class="container mt-4">
        <a href="{{ route('especialidades.index') }}" class="btn btn-light mb-3">Regresar</a>
        <form id="miFormulario" action="{{ route('especialidades.store') }}" method="POST" class="bg-secondary p-4 rounded">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
