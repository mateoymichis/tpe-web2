{include 'templates/header.tpl'}
<form action="{$base}/editar/{$id}" method="post">
    <input type="text" name="modelo" value="{$celular->modelo}">
    <input type="text" name="descripcion" value="{$celular->descripcion}">
    <input type="text" name="imagen" value="{$celular->imagen}">
    <input type="number" name="marca_id"  value="{$celular->marca_id}">
    <input type="submit" value="Editar">
</form>
{include 'templates/footer.tpl'}