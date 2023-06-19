<form action="celulares/insertar" method="post">
    <input type="text" name="modelo" placeholder="Modelo">
    <input type="text" name="descripcion" placeholder="Descripcion">
    <input type="text" name="imagen"  placeholder="Imagen">
    <select name="marca_id">
    {foreach $marcas as $marca}
        <option value="{$marca->id_marca}">
            {$marca->nombre}
        </option>
    {/foreach}
    </select>
    <input type="submit" value="Insertar">
</form>