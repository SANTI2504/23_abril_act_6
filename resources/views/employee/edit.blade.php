<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Editar empleado</title>
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 mt-3">
            <div class="card border-primary mb-3">
                <div class="card-header text-white bg-primary">
                    Formulario de actualizacion
                </div>
                <div class="card-body ">
                    <form action="{{url('empleados', $employee-> id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control mb-3" name="name" id="name"  value="{{$employee -> name}}" >

                            <label for="" class="form-label">Apellido</label>
                            <input type="text" class="form-control mb-3" name="lastname" id="lastname" value="{{$employee-> lastname}}" >

                            <label for="" class="form-label">Correo electronico</label>
                            <input type="text" class="form-control mb-3" name="email" id="email" value="{{$employee-> email}}" >

                            <label for="" class="form-label">Documento de identidad</label>
                            <input type="text" class="form-control mb-3" name="document" id="document" value="{{$employee-> document}}" >

                            <label for="" class="form-label">Genero</label>
                            <input type="text" class="form-control mb-3" name="gender" id="gender" value="{{$employee-> gender}}" >

                            <label for="" class="form-label">Empresa</label>
                            <select class="form-select mb-4" aria-label="Default select example" name="companies_id" id="companies_id" >

                                <!--usamos los datos de la tabla companies-->
                                @foreach($companies as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>

                            <button class="btn btn-success " type="submit">Actualizar empleado</button>

                            <a href="{{url('empleados')}}">volver a empleados</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
