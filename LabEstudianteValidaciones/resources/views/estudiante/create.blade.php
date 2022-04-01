
@include("navbar")
<h1>Add Student</h1>

<form action="{{ url('/estudiantes') }}" method="post">
    @csrf
    @include('estudiante.form')
</form>
@include("footer")