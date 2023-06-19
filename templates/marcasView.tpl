{include 'templates/header.tpl'}
<div class="container">
    <h1>Lista de marcas</h1>

    <ul>
    {foreach $marcas as $marca}
        <li>
        <p>{$marca->nombre}</p>
        <p>{$marca->cuit}</p>
        </li>
    {/foreach}
</div>
{include 'templates/formMarca.tpl'}
{include 'templates/footer.tpl'}