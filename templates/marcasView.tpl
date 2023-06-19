{include 'templates/header.tpl'}
<div class="container">
    <h2>Lista de marcas</h2>

    <ul>
    {foreach $marcas as $marca}
        <li>
        <p>{$marca->nombre}</p>
        <p>{$marca->cuit}</p>
        <p><a href="{BASE_URL}celulares/marca/{$marca->id_marca}">Ver celulares de {$marca->nombre}</a></p>
        </li>
    {/foreach}
</div>
{include 'templates/formMarca.tpl'}
{include 'templates/footer.tpl'}