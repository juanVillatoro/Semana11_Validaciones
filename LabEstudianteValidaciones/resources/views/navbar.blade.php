<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #11126C">
        <div class="container-fluid">
            <!--Enlace a Inicio-->
            <a class="navbar-brand" href="{{ url('estudiantes') }}">Estudiantes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                                <!--Enlace a Inicio-->
                <a class="nav-link active" aria-current="page" href="{{ url('estudiantes') }}">Inicio</a>

                </li>
                <li class="nav-item">
                                <!--Enlace al Formulario-->
                <a class="nav-link" href="{{ url('estudiantes/create') }}">Crear</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

<!--Imagen de fondo del sitio-->
<div style="background: linear-gradient(0deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('https://media.istockphoto.com/vectors/graduation-hat-seamless-pattern-vector-school-student-black-cap-vector-id1142169959?k=20&m=1142169959&s=170667a&w=0&h=9EdfQ5ooKdLZlwPHN3m1qKwkUANPVUHNHqzGVFe-Cr4=');">