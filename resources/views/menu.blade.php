@extends( 'layouts.app' )
@section( 'content' )
    <title>FSINICIOAD24</title>
    <div class="animated-header text-center my-3">
        <h1>Índice</h1>
    </div>
    <div class="container mt-4">
        <div class="list-group">
            <a href="{{ route('medicinas.index') }}" class="list-group-item list-group-item-action bg-secondary text-white">Lista de medicinas</a>
            <a href="{{ route('doctores.index') }}" class="list-group-item list-group-item-action bg-secondary text-white">Lista de doctores</a>
            <a href="{{ route('especialidades.index') }}" class="list-group-item list-group-item-action bg-secondary text-white">Lista de especialidades</a>
            <a href="{{ route('pacientes.index') }}" class="list-group-item list-group-item-action bg-secondary text-white">Lista de pacientes</a>
            <a href="{{ route('citas.index') }}" class="list-group-item list-group-item-action bg-secondary text-white">Lista de citas</a>
        </div>
        <div>
            <p></p>
        </div>
        <div class="list-group">
            <a href="http://doctores.test/" class="list-group-item list-group-item-action bg-secondary text-white">Gestión de doctores</a>
            <a href="http://pacientes.test/" class="list-group-item list-group-item-action bg-secondary text-white">Gestión de pacientes</a>
            <a href="http://pacientes.test/" class="list-group-item list-group-item-action bg-secondary text-white">Gestión de citas</a>
        </div>
    </div>
</body>
</html>
@endsection
