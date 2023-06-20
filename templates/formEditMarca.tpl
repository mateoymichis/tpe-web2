{include 'templates/header.tpl'}
<div class="p-4">
    <h3>Editar marca</h3>
    <form action="{$base}marcas/editar/{$id}" method="post" class="p-4">
        <div class="mb-3">
            <label for="nombre" class="form-label">Marca</label>
            <input type="text" name="nombre" class="form-control" value="{$marca->nombre}">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">CUIT</label>
            <input type="number" name="cuit" class="form-control" value="{$marca->cuit}">
        </div>
        <input type="submit" value="Editar" class="btn btn-primary">
    </form>
</div>
{include 'templates/footer.tpl'}