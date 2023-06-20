<div class="p-4">
<h3>Insertar celular</h3>
<form action="celulares/insertar" method="post" class="p-4">
    <div class="mb-3">
        <label for="modelo"  class="form-label">Modelo</label>
        <input type="text" name="modelo" class="form-control" placeholder="Modelo">
    </div>
    <div class="mb-3">
        <label for="descripcion"  class="form-label">Descripcion</label>
        <input type="text" name="descripcion" class="form-control" placeholder="Descripcion">
    </div>
    <div class="mb-3">
        <label for="imagen"  class="form-label">Link a imagen</label>
        <input type="text" name="imagen" class="form-control" placeholder="Imagen">
    </div>
    <div class="mb-3">
        <label for="marca_id"  class="form-label">Marca</label>
        <select name="marca_id"  class="form-select">
            {foreach $marcas as $marca}
                <option value="{$marca->id_marca}">
                    {$marca->nombre}
                </option>
            {/foreach}
        </select>
    </div>
        <input type="submit" value="Insertar" class="btn btn-primary">
</form>
</div>