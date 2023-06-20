<h3>Insertar celular</h3>
<form action="celulares/insertar" method="post">
    <label for="modelo">Modelo</label>
    <input type="text" name="modelo" placeholder="Modelo">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" placeholder="Descripcion">
    <label for="imagen">Link a imagen</label>
    <input type="text" name="imagen"  placeholder="Imagen">
    <label for="marca_id">Marca</label>
    <select name="marca_id">
    {foreach $marcas as $marca}
        <option value="{$marca->id_marca}">
            {$marca->nombre}
        </option>
    {/foreach}
    </select>
    <input type="submit" value="Insertar">
</form>