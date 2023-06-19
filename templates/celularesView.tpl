{include 'templates/header.tpl'}
<div class="container">
    <h2>Lista de celulares</h2>

    <ul>
    {foreach $celulares as $celular}
        <li>
        <p>{$celular->modelo}</p>
        <p>{$celular->descripcion}</p>
        <p><img src="{$celular->imagen}"></p>
        <p>{$celular->marca}</p>
        </li>
    {/foreach}
</div>
{include 'templates/formCelular.tpl'}
{include 'templates/footer.tpl'}