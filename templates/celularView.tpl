{include 'templates/header.tpl'}
<h2>{$celular->modelo}</h2>
<p>{$celular->descripcion}</p>
<img class="img-detalle" src="{$celular->imagen}">
<p>{$celular->marca}</p>
{include 'templates/footer.tpl'}