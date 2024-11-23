@extends( 'layouts.app' )
@section( 'content' )
<title>Agregar Medicina</title>
    <div class="animated-header text-center my-3">
        <h1>Agregar Medicina</h1>
    </div>
    <div class="container mt-4">
        <a href="{{ route('medicinas.index') }}" class="btn btn-light mb-3">Regresar</a>
        <form id="miFormulario" action="{{ route('medicinas.store') }}" method="POST" class="bg-secondary p-4 rounded">
            @csrf
            <div class="mb-3">
                <label for="clave" class="form-label">Clave:</label>
                <input type="text" id="clave" name="clave" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="text" id="precio" name="precio" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection