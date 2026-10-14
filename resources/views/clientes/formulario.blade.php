<label>Nombre del cliente</label>
<input name="nombre" maxlength="120" required value="{{ old('nombre', $cliente->nombre ?? '') }}">

<label>Teléfono</label>
<input name="telefono" maxlength="20" value="{{ old('telefono', $cliente->telefono ?? '') }}">

<label>Dirección</label>
<input name="direccion" maxlength="200" required value="{{ old('direccion', $cliente->direccion ?? '') }}">

<label>Zona</label>
<input name="zona" maxlength="100" required value="{{ old('zona', $cliente->zona ?? '') }}">

<label>Condición de pago</label>
<select name="condicion_pago" required>
    <option value="CONTADO" @selected(old('condicion_pago', $cliente->condicion_pago ?? 'CONTADO') == 'CONTADO')>Contado</option>
    <option value="CREDITO" @selected(old('condicion_pago', $cliente->condicion_pago ?? '') == 'CREDITO')>Crédito</option>
</select>

<label>Límite de crédito RD$</label>
<input type="number" name="limite_credito" min="0" step="0.01" required value="{{ old('limite_credito', $cliente->limite_credito ?? '0.00') }}">

<button type="submit">{{ $textoBoton }}</button>
<a class="btn" href="{{ route('clientes.index') }}">Cancelar</a>
