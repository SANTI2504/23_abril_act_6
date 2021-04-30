<!doctype html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 mt-4">
            <div class="card mb-3 border-success" >
                <div class="card-header text-white bg-success text-center">Formulario de creación de empleados</div>
                <div class="card-body">
                    <form action="{{url('empleados')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control mb-3" name="name" id="name" >

                            <label for="" class="form-label">Apellido</label>
                            <input type="text" class="form-control mb-3" name="lastname" id="lastname" >

                            <label for="" class="form-label">Correo electronico</label>
                            <input type="text" class="form-control mb-3" name="email" id="email" >

                            <label for="" class="form-label">Documento de identidad</label>
                            <input type="text" class="form-control mb-3" name="document" id="document" >

                            <label for="" class="form-label">Genero</label>
                            <input type="text" class="form-control mb-3" name="gender" id="gender" >

                            <label for="" class="form-label">Empresa</label>
                            <select class="form-select mb-4" aria-label="Default select example" name="companies_id" id="companies_id">
                                <option selected>selecciona tu empresa</option>
                                    <!--usamos los datos de la tabla companies-->
                                    @foreach($companies as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                    @endforeach
                            </select>

                            <button class="btn btn-success " type="submit">Crear nuevo empleado</button>

                            <a href="{{url('company')}}">volver a empleados</a>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
