{include file="header.tpl"}

<h1>{$peliculas}</h1>
<!-- CSS only -->
<ul class="list-group">
    {foreach from=$movieArrays item=$movie}
        <li class="list-group-item list-group-item-action list-group-item-primary"><a href='detalles/{$movie->id_peliculas}'>Nombre: {$movie->nombre}</a></li>
       
    {/foreach}
</ul>
