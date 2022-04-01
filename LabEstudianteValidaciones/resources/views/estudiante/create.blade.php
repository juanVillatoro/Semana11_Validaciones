
@include("navbar")
<center><h1>Add Student</h1></center>
<br>
<!--- Se agrega formulario -->
<form action="{{ url('/estudiantes') }}" method="post">
    @csrf
    @include('estudiante.form')
</form>
@include("footer")