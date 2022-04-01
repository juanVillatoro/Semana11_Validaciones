@include("navbar")

<center><h1>Listado de Estudiantes</h1></center>
<br>
<br>
<!--- Tabla para visualizacion de datos -->
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Cod</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Action 1</th>
            <th>Action 2</th>
        </tr>
    </thead>
    <tbody>
        <!--- Recorrido de datos -->
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
                    <!--- Boton de Eliminar -->
                    <input class="btn btn-danger" type="submit" value="Delete"
                    onclick="return confirm('Do you want to delete this record?')">
                </td>
            </form>
            {{-- se incluye la opción de editar--}}

            <!--- Boton de Editar -->
            <form action="{{ url('/estudiantes/'.$estudiante->id .'/edit') }}">
                <td>
                    <input class="btn btn-success" type="submit" value="Edit">
                </td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
@include("footer")

