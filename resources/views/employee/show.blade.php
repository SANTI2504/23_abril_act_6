<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Detalles del empleado</title>
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 mt-5">

            <table class="table table-striped table-bordered ">
                <tr class="text-center">
                    <td scope="row" colspan="2" class="table-primary "><strong>DATOS  DEL EMPLEADO</strong></td>

                </tr>
                <tr>
                    <th class="col-2">NOMBRE</th>
                    <td class="col-4">{{$employee-> name}}</td>
                </tr>
                <tr>
                    <th class="col-2">CORREO</th>
                    <td class="col-4">{{$employee-> lastname}}</td>
                </tr>
                <tr>
                    <th class="col-2">CORREO ELECTRONICO</th>
                    <td class="col-4">{{$employee-> email}}</td>
                </tr>
                <tr>
                    <th class="col-2">DOCUMENTO</th>
                    <td class="col-4">{{$employee-> document}}</td>
                </tr>
                <tr>
                    <th class="col-2">GENERO</th>
                    <td class="col-4">{{$employee-> gender}}</td>
                </tr>
                <tr>
                    <th class="col-2">EMPRESA</th>
                    <td class="col-4">{{$employee-> companies_id}}</td>
                </tr>


            </table>
            <!--generamos una url para redirecionarlo a la ruta especifica -->
            <a href="{{url('empleados')}}">volver al inicio</a>

        </div>
    </div>
</div>

</body>
</html>
