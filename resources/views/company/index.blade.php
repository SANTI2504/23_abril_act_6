<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >
    <title>Listado de empresas</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col mt-5" >
            @if(session('status'))
            <div class="alert alert-{{session('type')}}" role="alert">
                {{session('status')}}
            </div>
            @endif

            <a class="btn btn-primary mb-3" href="{{url('empresas/crear')}}">Crear nueva empresa</a>

            <table class="table table-primary  table-hover">
                <thead>
                <tr>
                    <th class="col-1" scope="col">ID</th>
                    <th class="col-2" scope="col">NOMBRE</th>
                    <th class="col-4" scope="col">DESCRIPCION</th>
                    <th class="col-2" scope="col">TELEFONO</th>
                    <th class="col-1" scope="col">NIT</th>
                    <th class="col-2 text-center" scope="col">OPCIONES</th>

                </tr>
                </thead>
                <tbody>
                <!-- usamos el foreash para recorrer el json dato por dato -->
                @foreach($companies as $company)
                    <tr>
                        <!-- lo que esta en llaves es para imprimir la variable $user en la posicion id-->
                        <td>{{$company-> id}}</td>
                        <td>{{$company-> name}}</td>
                        <td>{{$company-> description}}</td>
                        <td>{{$company-> phone}}</td>
                        <td>{{$company-> nit}}</td>
                        <td class="text-center ">
                            <form class="" action="{{url('empresas', $company -> id)}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{url('empresas', $company-> id)}}" class="btn btn-sm btn-info  mb-2"><i class="fas fa-eye"></i></a>
                                <a href="{{url('empresas/editar', $company -> id)}}" class="btn btn-sm btn-warning  mb-2"><i class="fas fa-pen-square"></i></a>
                                <button type="submit" class="btn btn-sm btn-danger  mb-2"><i class="far fa-trash-alt"></i></button>

                            </form>
                        </td>


                    </tr>
                @endforeach
                </tbody>
            </table>
            <div style="text-align: center">
                {{$companies->links()}}
            </div>

        </div>
    </div>
</div>

</body>
</html>

