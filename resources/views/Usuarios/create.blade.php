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
            <h4 class="card-title">Alta Usuarios</h4>
          </div>
          <form action="{{ url('usuarios')}}" id="agregar" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nombre" placeholder="Ejemplo: Jair Josue" name="nombre" required>
              <label for="floatingInput">Nombre</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="app" placeholder="Ejemplo: Heras" name="app" required>
            <label for="floatingInput">Apellido Paterno</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="apm" placeholder="Ejemplo:Campos" name="apm" required>
          <label for="floatingInput">Apellido Materno</label>
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" placeholder="Ejemplo: jaircampos468@gmail.com" name="email" required>
        <label for="floatingInput">Correo</label>
    </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="password" placeholder="Ejemplo:54352" name="password" required>
        <label for="floatingInput">Password</label>
    </div>
    <div class="form-floating mb-3">
      {{-- Ver Imagen Seleccionada --}}
      <div class="grid grid-cols-1 mt-5 mx-7">
        <img id="imagenSeleccionada" style="max-height: 300px"/>
      </div>
      <div class="grid grid-cols-1 mt-2 mx-2">
        <label class="uppercase md:text-sm text-xs text-gray-300 text-light font-semibold mb-1">Subir Imagen</label>
        <div class="flex items-center justify-center w-full">
          <label class="flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group">
            <div class="flex flex-col items-center justify-center pt-2">
              <input name="imagen" id="imagen" type="file" class="hidden" accept="image/*"/>
            </div>
          </label>
        </div>
      </div>
      <label for="floatingInput">Imagen</label>
  </div>
  <div class="form-floating mb-3">
    <input type="number" class="form-control" id="telefono" placeholder="Ejemplo: 72298383" name="telefono" required>
    <label for="floatingInput">Telefono</label>
</div>
  <a href="/usuarios" class="btn btn-danger m-3">Cancelar</a>
  <button type="submit" class="btn btn-success m-3" value="save">Agregar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')




{{-- ALERTA --}}
<script type="text/javascript">
  $('#agregar').submit(function(r){
      r.preventDefault();
Swal.fire({
      title: '¿Estas Seguro?',
text: "No Puedes Revertir Esto!",
icon: 'warning',
showCancelButton: true,
confirmButtonText: 'Si,Agregalo!',
cancelButtonText: 'No, Cancelalo!',
cancelButtonColor: 'red',
confirmButtonColor: 'green',
reverseButtons: true
}).then((result) => {
if (result.isConfirmed) {

this.submit();
}else if (
/* Read more about handling dismissals below */
result.dismiss === Swal.DismissReason.cancel
) {
swal.fire(
'Cancelado',
'¿Te Arrepentiste?',
'error'
)
}
})
});
</script>   

{{-- IMAGEN VER --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
  $(document).ready(function(e){
    $('#imagen').change(function(){
      let reader=new FileReader();
      reader.onload = (e) => {
        $('#imagenSeleccionada').attr('src', e.target.result);
      }
      reader.readAsDataURL(this.files[0]);
    });
  });
</script>