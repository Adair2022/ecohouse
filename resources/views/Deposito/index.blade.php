@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <!-- CSS only -->
  </head>
<div class="main-panel" id="main-panel">
  <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
    <div class="container-fluid">
    </div>
  </nav>
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Usuarios</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead class=" text-primary">
                  <th scope="col">
                    ID
                  </th>
                  <th scope="col">
                    Nombre
                  </th>
                  <th scope="col">Capacidad</th>
                  <th scope="col">Lugar</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Mostrar</th>
                  <th scope="col">Eliminar</th>
                  <th class="text-right">Modificar</th>
                </thead>
                <tbody>
                  <tr>
                  <td>1</td>
                  <td>1</td>
                  <td>5000l</td>
                  <td>Juan</td>
                  <td>Lerma</td>
                  <td class="text-right"><a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                  <td> <form action="#" class="d-inline formulario-eliminar" method="POST">
                    <button class="btn btn-danger m-6"><i class="fa-solid fa-trash"></i></button>
                  </form>
                                                </td>
                <td><a href="#" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a></td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@include('layouts.footer')