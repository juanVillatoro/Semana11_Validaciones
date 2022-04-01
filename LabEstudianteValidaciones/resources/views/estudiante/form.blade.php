<div class="bg-light" style="background: linear-gradient(0deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('https://media.istockphoto.com/vectors/hand-drawn-starry-sky-seamless-pattern16-vector-id1282216378?b=1&k=20&m=1282216378&s=612x612&w=0&h=huM1AtxgB1BxRBuxZra1Ae-rV3XEg-SJrSYSAfnmzKc=');">
    <div class="row g-5">
        <center>
            <div class="col-6">
                <!-- Formulario -->
                <form class="needs-validation">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="cod" class="form-label">Cod Estudiante</label>
                            <input type="text" class="form-control" name="cod" id="cod" placeholder="Example: 12345"
                                value="{{ isset($estudiante->cod)?$estudiante->cod:'' }}">

                            <div class="invalid-feedback">
                                Type in your cod
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Example: Armando"
                                value="{{ isset($estudiante->name)?$estudiante->name:'' }}">
                            <div class="invalid-feedback">
                                Type in your name
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="adress" class="form-label">Adress</label>
                            <input type="text" class="form-control" name="adress" id="adress" placeholder="Example: 5a avenida norte #123"
                                value="{{ isset($estudiante->adress)?$estudiante->adress:'' }}">
                            <div class="invalid-feedback">
                                Type in your adress
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Example: +503 7816-1234"
                                value="{{ isset($estudiante->phone)?$estudiante->phone:'' }}">

                            <div class="invalid-feedback">
                                Type in your phone
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Example: nobody@gmail.com" 
                                value="{{ isset($estudiante->email)?$estudiante->email:'' }}">

                            <div class="invalid-feedback">
                                Type in your email
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" />

                </form>
            <button class="w-100 btn btn-dark btn-lg" type="submit">Save data</button>

                <!-- final del formulario -->
                <hr class="my-4" />
            </div>
        </center>
    </div>
</div>