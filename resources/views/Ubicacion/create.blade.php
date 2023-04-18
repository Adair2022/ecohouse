@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection

<head>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
            <h4 class="card-title">Alta Ubicacion</h4>
          </div>
          <form action="{{ url('ubicacion')}}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre_t" placeholder="" name="nombre" required>
                <label for="floatingInput">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre_t" placeholder="" name="info" required>
                <label for="floatingInput">Informacion</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre_t" placeholder="" name="ubicacion" required>
                <label for="floatingInput">Ubicacion</label>
            </div>

  <a href="/ubicacion" class="btn btn-danger m-3">Cancelar</a>
  <button type="submit" class="btn btn-success m-3" value="save">Agregar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')
