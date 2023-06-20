{include 'templates/header.tpl'}
<div class="p-4">
    <h3>Editar celular</h3>
    <form action="{$base}celulares/editar/{$id}" method="post" class="p-4">
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" name="modelo" class="form-control" value="{$celular->modelo}">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" value="{$celular->descripcion}">
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Link a imagen</label>
            <input type="text" name="imagen"  class="form-control" value="{$celular->imagen}">
        </div>
        <div class="mb-3">
            <label for="marca_id" class="form-label">Marca</label>
            <select name="marca_id" class="form-select">
                {foreach $marcas as $marca}
                    <option value="{$marca->id_marca}" {if ($celular->marca_id) == ($marca->id_marca)} selected="true"
                        {/if}>
                        {$marca->nombre}
                    </option>
                {/foreach}
            </select>
        </div>
        <input type="submit" value="Editar" class="btn btn-primary">
    </form>
</div>
{include 'templates/footer.tpl'}