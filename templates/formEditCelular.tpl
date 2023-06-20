{include 'templates/header.tpl'}
<h3>Editar celular</h3>
<form action="{$base}celulares/editar/{$id}" method="post">
    <label for="modelo">Modelo</label>
    <input type="text" name="modelo" value="{$celular->modelo}">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" value="{$celular->descripcion}">
    <label for="imagen">Link a imagen</label>
    <input type="text" name="imagen" value="{$celular->imagen}">
    <label for="marca_id">Marca</label>
    <select name="marca_id">
    {foreach $marcas as $marca}
        <option value="{$marca->id_marca}"
        {if ($celular->marca_id) == ($marca->id_marca)}
            selected="true"
        {/if}
        >
            {$marca->nombre}
        </option>
    {/foreach}
    </select>
    
    <input type="submit" value="Editar">
</form>
{include 'templates/footer.tpl'}