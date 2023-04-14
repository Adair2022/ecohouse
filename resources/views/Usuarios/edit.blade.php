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
            <h4 class="card-title">Editar Usuarios</h4>
          </div>
          <form action="{{ route('usuarios.update',$usuarios->id) }}" id="editar" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
            @method("PATCH")
            <div class="form-floating mb-3">
            <input class="form-control" type="text" value="{{$usuarios->id}}" aria-label="Disabled input example" disabled/>
            <label for="">ID</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" id="nombre_u" name="nombre_u" value="{{$usuarios->nombre_u}}" required><br>
              <label for="floatingInput">Nombre</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" type="text" id="app" name="app" value="{{$usuarios->app}}" required><br>
            <label for="floatingInput">Apellido Paterno</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" type="text" id="apm" name="apm" value="{{$usuarios->apm}}" required><br>
          <label for="floatingInput">Apellido Materno</label>
      </div>
      <div class="form-floating mb-3">
        <input class="form-control" type="text" id="email" name="email" value="{{$usuarios->email}}" required><br>
        <label for="floatingInput">Correo</label>
    </div>
      <div class="form-floating mb-3">
        <input class="form-control" type="text" id="password" name="password" value="{{$usuarios->password}}" required><br>
        <label for="floatingInput">Password</label>
    </div>
    <div class="grid grid-cols-1 mt-5 mx-7">
        <img src="/imagen/{{ $usuarios->imagen }}" width="250px" id="imagenSeleccionada">
    </div>

    <div class="grid grid-cols-1 mt-5 mx-7">
    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
        <div class='flex items-center justify-center w-full'>
            <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
            <input name="imagen" id="imagen" type='file' class="hidden" value="{{$usuarios->imagen}}"  accept="image/*" />

            </label>
        </div>
    </div>
  <div class="form-floating mb-3">
    <input class="form-control" type="text" id="telefono" name="telefono" value="{{$usuarios->telefono}}" required><br>
    <label for="floatingInput">Telefono</label>
</div>
<a class="btn btn-danger m-1"  href="/usuarios" >Cancelar</a>
<button type="submit" class="btn btn-success m-1" value="update">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')




{{-- ALERTA --}}
<script type="text/javascript">
  $('#editar').submit(function(r){
      r.preventDefault();
Swal.fire({
      title: '¿Estas Seguro?',
text: "No Puedes Revertir Esto!",
icon: 'warning',
showCancelButton: true,
confirmButtonText: 'Si,Modificalo!',
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
