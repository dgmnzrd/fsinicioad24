@extends( 'layouts.app' )
@section( 'content' )
<title>Editar Especialidad</title>
    <div class="animated-header text-center my-3">
        <h1>Editar Especialidad</h1>
    </div>
    <div class="container mt-4">
        <form id="miFormulario" action="{{ route('especialidades.update', $especialidad->id) }}" method="POST" class="bg-secondary p-4 rounded">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $especialidad->nombre }}">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{ $especialidad->descripcion }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
