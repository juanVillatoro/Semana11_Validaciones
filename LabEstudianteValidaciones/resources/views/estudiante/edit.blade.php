
@include("navbar")

<center><h1>Edit student</h1></center>
<!--Se agrega formulario-->

<form action="{{ url('/estudiantes/' .$estudiante->id) }}" method='post'> 
    @csrf
    {{ method_field('PUT') }}
    @include('estudiante.form')
</form>

@include("footer")