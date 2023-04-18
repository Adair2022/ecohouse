@include('layouts.header')

@include('layouts.menu')


@section('header')
@endsection

<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- CSS only -->
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
                        <h4 class="card-title">Editar Plantas</h4>
                    </div>
                    <form action="{{ route('plantas.update', $plantas->id) }}" id="editar" method="POST"
                        enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        @method('PATCH')
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" value="{{ $plantas->id }}"
                                aria-label="Disabled input example" disabled />
                            <label for="">ID</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" id="nombre" name="nombre"
                                value="{{ $plantas->nombre }}" required><br>
                            <label for="floatingInput">Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" id="app" name="estatus"
                                value="{{ $plantas->estatus }}" required><br>
                            <label for="floatingInput">status</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" id="apm" name="detalle"
                                value="{{ $plantas->detalle }}" required><br>
                            <label for="floatingInput"> detalle</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" id="apm" name="estatus"
                                value="{{ $plantas->estatus }}" required><br>
                            <label for="floatingInput"> estatus</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" id="apm" name="color"
                                value="{{ $plantas->color }}" required><br>
                            <label for="floatingInput"> color</label>
                        </div>

                        <a class="btn btn-danger m-1" href="/plantas">Cancelar</a>
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
    $('#editar').submit(function(r) {
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
            } else if (
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
    $(document).ready(function(e) {
        $('#imagen').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
