{include 'templates/header.tpl'}
<div class="p-4">
<h2 class="modelo-detalle">{$celular->modelo}</h2>
<p>{$celular->descripcion}</p>
<img class="img-detalle" src="{$celular->imagen}">
<p class="marca">{$celular->marca}</p>
{if isset($user)}
<a href="{BASE_URL}celulares/form-editar/{$celular->id_celular}">Editar</a>
<a href="{BASE_URL}celulares/borrar/{$celular->id_celular}">Eliminar</a>
{/if}
<a href="{BASE_URL}">Volver</a>
</div>
{include 'templates/footer.tpl'}