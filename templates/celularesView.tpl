{include 'templates/header.tpl'}
<div class="container">
    <h2>Lista de celulares</h2>

    <ul>
    {foreach $celulares as $celular}
        <li>
        <p>{$celular->modelo}</p>
        <p>{$celular->descripcion}</p>
        <p><img class="img-lista" src="{$celular->imagen}"></p>
        <p>{$celular->marca}</p>
        <a href="{BASE_URL}celulares/detalles/{$celular->id_celular}">Detalles</a>
        {if isset($user)}
            <a href="{BASE_URL}celulares/form-editar/{$celular->id_celular}">Editar</a>
            <a href="{BASE_URL}celulares/borrar/{$celular->id_celular}">Eliminar</a>
        {/if}
        </li>
    {/foreach}
</div>
{if isset($user)}
{include 'templates/formCelular.tpl'}
{/if}
{include 'templates/footer.tpl'}