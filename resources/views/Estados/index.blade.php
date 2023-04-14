

    @include('layouts.header')

    @include('layouts.menu')


    @section('header')

    @endsection

    <div class="container">
        <h1>Formulario de Registro</h1>
        <hr>
        <select id="estados">
            <option value="0">-- Seleccione un estado --</option>
            @foreach($estados as $estado)
                <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
            @endforeach
        </select>
        <hr>
        <select id="municipios">
            <option value="0">-- Seleccione un estado antes --</option>
        </select>
        <br>
    </div>
    @include('layouts.footer')

