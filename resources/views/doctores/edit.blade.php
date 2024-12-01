@extends( 'layouts.app' )
@section( 'content' )
<title>Editar Doctor</title>
    <div class="animated-header text-center my-3">
        <h1>Editar Doctor</h1>
    </div>
    <div class="container mt-4">
        <form id="miFormulario" action="{{ route('doctores.update', $doctor->id) }}" method="POST" class="bg-secondary p-4 rounded">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $doctor->nombre }}">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="form-control" value="{{ $doctor->apellido }}">
            </div>
            <div class="mb-3">
                <label for="especialidad" class="form-label">Especialidad:</label>
                <input type="text" id="especialidad" name="especialidad" class="form-control" value="{{ $doctor->especialidad }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $doctor->email }}">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" class="form-control" value="{{ $doctor->telefono }}">
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" id="direccion" name="direccion" class="form-control" value="{{ $doctor->direccion }}">
            </div>
            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="{{ $doctor->fecha_nacimiento }}">
            </div>
            <div class="mb-3">
                <label for="anos_experiencia" class="form-label">Años de Experiencia:</label>
                <input type="number" id="anos_experiencia" name="anos_experiencia" class="form-control" value="{{ $doctor->anos_experiencia }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection

