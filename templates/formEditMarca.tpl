{include 'templates/header.tpl'}
<form action="{$base}marcas/editar/{$id}" method="post">
    <input type="text" name="nombre" value="{$marca->nombre}">
    <input type="number" name="cuit" value="{$marca->cuit}">
    <input type="submit" value="Editar">
</form>
{include 'templates/footer.tpl'}