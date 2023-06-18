{include 'templates/header.tpl'}
<div class="container">
    <h1>Lista de celulares</h1>

    <ul>
    {foreach $celulares as $celular}
        <li>
        <p>{$celular->modelo}</p>
        <p>{$celular->descripcion}</p>
        <p><img src="{$celular->imagen}"></p>
        </li>
    {/foreach}
</div>
{include 'templates/formCelular.tpl'}
{include 'templates/footer.tpl'}