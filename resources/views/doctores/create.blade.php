@extends( 'layouts.app' )
@section( 'content' )
<title>Agregar Doctor</title>
    <div class="animated-header text-center my-3">
        <h1>Agregar Doctor</h1>
    </div>
    <div class="container mt-4">
        <a href="{{ route('doctores.index') }}" class="btn btn-light mb-3">Regresar</a>
        <form id="miFormulario" action="{{ route('doctores.store') }}" method="POST" class="bg-secondary p-4 rounded">
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
                <label for="especialidad" class="form-label">Especialidad:</label>
                <input type="text" id="especialidad" name="especialidad" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" class="form-control">
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" id="direccion" name="direccion" class="form-control">
            </div>
            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control">
            </div>
            <div class="mb-3">
                <label for="anos_experiencia" class="form-label">Años de Experiencia:</label>
                <input type="number" id="anos_experiencia" name="anos_experiencia" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
