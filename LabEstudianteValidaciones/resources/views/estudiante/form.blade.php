<div>
    <div class="row g-5">
        <center>
            <div class="col-6">
                <!-- Formulario -->
                <form class="needs-validation">
                    <div class="row g-3">

                        <!--- CodEstudiante -->
                        <div class="col-12">
                            <label for="cod" class="form-label">Cod Estudiante</label>
                            <input type="text" class="form-control" name="cod" id="cod" placeholder="Example: SMIS000001"
                                value="{{ isset($estudiante->cod)?$estudiante->cod:'' }}" pattern="^[A-Z]{4}\d{6}$" required>
                        </div>
                        <!--- Nombre -->
                        <div class="col-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Example: Armando Flores"
                                value="{{ isset($estudiante->name)?$estudiante->name:'' }}" required>
                        </div>
                        <!--- Direccion -->
                        <div class="col-12">
                            <label for="adress" class="form-label">Address</label>
                            <input type="text" class="form-control" name="adress" id="adress" placeholder="Example: 5a avenida norte #123"
                                value="{{ isset($estudiante->adress)?$estudiante->adress:'' }}" required>
                        </div>
                        <!--- Telefono -->
                        <div class="col-12">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Example: 50378161234"
                                value="{{ isset($estudiante->phone)?$estudiante->phone:'' }}" pattern="^503\d{8}$" required>
                        </div>
                        <!--- Email -->
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Example: nobody@gmail.com" 
                                value="{{ isset($estudiante->email)?$estudiante->email:'' }}" pattern="[a-zA-Z0-9._-]+@(hotmail|outlook|gmail)+\.com" required>
                        </div>
                    </div>

                    <hr class="my-4" />

                </form>
              <!--- Boton de Guardar -->
                       
            <button class="w-100 btn btn-dark btn-lg" type="submit">Save data</button>

                <!-- final del formulario -->
                <hr class="my-4" />
            </div>
        </center>
    </div>
</div>