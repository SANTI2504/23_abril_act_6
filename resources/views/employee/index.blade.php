<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Listado de usuarios</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col mt-5" >

            <table class="table table-dark table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">CORREO </th>
                    <th scope="col">DOCUMENTO </th>
                    <th scope="col">GENERO </th>
                    <th scope="col">EMPRESA </th>

                </tr>
                </thead>
                <tbody>
                <!-- usamos el foreash para recorrer el json dato por dato -->
                @foreach($employees as $employee)
                    <tr>
                        <!-- lo que esta en llaves es para imprimir la variable $user en la posicion id-->
                        <td>{{$employee-> id}}</td>
                        <td>{{$employee-> name}}</td>
                        <td>{{$employee-> lastname}}</td>
                        <td>{{$employee-> email}}</td>
                        <td>{{$employee-> document}}</td>
                        <td>{{$employee-> gender}}</td>
                        <td> (empresa)</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <div style="text-align: center">
                {{$employees->links()}}
            </div>

        </div>
    </div>
</div>

</body>
</html>
