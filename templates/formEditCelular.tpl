{include 'templates/header.tpl'}
<form action="{$base}celulares/editar/{$id}" method="post">
    <input type="text" name="modelo" value="{$celular->modelo}">
    <input type="text" name="descripcion" value="{$celular->descripcion}">
    <input type="text" name="imagen" value="{$celular->imagen}">
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