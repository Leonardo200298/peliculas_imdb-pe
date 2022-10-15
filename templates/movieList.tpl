{include file="header.tpl"}

<h1>{$peliculas}</h1>
<ul class="list-group">
    {if !isset($smarty.session.USER_ID)}
        {foreach from=$movieArrays item=$movie}
            <li class="list-group-item list-group-item-action list-group-item-primary"><a href='detalles/{$movie->id_peliculas}'>Nombre: {$movie->nombre}</a></li>
           
        {/foreach}
        
    {else}
        {foreach from=$movieArrays item=$movie}
            <li class="list-group-item list-group-item-action list-group-item-primary"><a href="borrar/{$movie->id_peliculas}" type="button" class="btn btn-outline-danger">Borrar</a>
            <a href="edit-movies/{$movie->id_peliculas}" class="btn btn-outline-success">Editar</a> Nombre: <a href='detalles/{$movie->id_peliculas}'>{$movie->nombre}</a></li>

        {/foreach}
    {/if}
</ul>
