{include 'templates/header.tpl'}
<h3>Editar marca</h3>
<form action="{$base}marcas/editar/{$id}" method="post">
    <label for="nombre">Marca</label>
    <input type="text" name="nombre" value="{$marca->nombre}">
    <label for="nombre">CUIT</label>
    <input type="number" name="cuit" value="{$marca->cuit}">
    <input type="submit" value="Editar">
</form>
{include 'templates/footer.tpl'}