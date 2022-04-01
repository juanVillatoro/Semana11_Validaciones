@include("navbar")

<h1>Listado de Estudiantes</h1>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Cod</th>
            <th>Name</th>
            <th>Adress</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Action 1</th>
            <th>Action 2</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $estudiante)
        <tr>
            <td>{{ $estudiante->id }}</td>
            <td>{{ $estudiante->cod }}</td>
            <td>{{ $estudiante->name }}</td>
            <td>{{ $estudiante->adress }}</td>
            <td>{{ $estudiante->phone }}</td>
            <td>{{ $estudiante->email }}</td>
            {{-- Incluimos acciones de eliminar y editar --}}
            <form action="{{ url('/estudiantes/'.$estudiante->id) }}" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <td>
                    <input class="btn btn-danger" type="submit" value="Eliminar"
                    onclick="return confirm('Do you want to delete this record?')">
                </td>
            </form>
            {{-- se incluye la opción de editar--}}
            <form action="{{ url('/estudiantes/'.$estudiante->id .'/edit') }}">
                <td>
                    <input class="btn btn-success" type="submit" value="Editar">
                </td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
@include("footer")

