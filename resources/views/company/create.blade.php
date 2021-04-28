<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Creacion de empresa</title>
</head>
<body>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 mt-5 ">
            <div class="card border-primary mb-3">
                <div class="card-header text-center text-white bg-primary">Formulario de creacion de empresa</div>
                <div class="card-body">
                    <form action="{{url('empresas')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" name="description" id="description" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">NIT</label>
                            <input type="text" class="form-control" name="nit" id="nit" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Telefono</label>
                            <input type="text" class="form-control" name="phone" id="phone" >
                        </div>

                        <button class="btn btn-primary" type="submit">Guardar nueva empresa</button>
                        <!-- para hacer una redireccion a otra pagina se debe hacer de la siguiente manera -->
                        <a href="{{url('empresas')}}">volver al inicio</a>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
