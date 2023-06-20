{include 'templates/header.tpl'}
<div class="container">
    <h2>Lista de marcas</h2>

    <ul>
    {foreach $marcas as $marca}
        <li>
        <p>{$marca->nombre}</p>
        <p>{$marca->cuit}</p>
        <p><a href="{BASE_URL}celulares/marca/{$marca->id_marca}">Ver celulares de {$marca->nombre}</a></p>
        {if isset($user)}
        <a href="{BASE_URL}marcas/form-editar/{$marca->id_marca}">Editar</a>
        <a href="{BASE_URL}marcas/borrar/{$marca->id_marca}">Eliminar</a>
        {/if}
        </li>
    {/foreach}
</div>
{if isset($user)}
{include 'templates/formMarca.tpl'}
{/if}
{include 'templates/footer.tpl'}