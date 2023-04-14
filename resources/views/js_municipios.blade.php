<option value="0">-- Seleccione un municipio --</option>
@foreach($municipios as $municipio)
    <option value="{{ $municipio->id_municipio }}">{{ $municipio->nombre }}</option>
@endforeach
