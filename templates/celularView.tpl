{include 'templates/header.tpl'}
<h2>{$celular->modelo}</h2>
<p>{$celular->descripcion}</p>
<img class="img-detalle" src="{$celular->imagen}">
<p>{$celular->marca}</p>
{if isset($user)}
<a href="{BASE_URL}celulares/form-editar/{$celular->id_celular}">Editar</a>
<a href="{BASE_URL}celulares/borrar/{$celular->id_celular}">Eliminar</a>
{/if}
{include 'templates/footer.tpl'}