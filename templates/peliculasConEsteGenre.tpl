{include file="header.tpl" }

<h1>{$pelicula}</h1>
<ul class="list-group">

    {foreach $generosDePeliculas as $peli}
        <li class="list-group-item list-group-item-action list-group-item-success">nombre:{$peli->nombre}</li>
    {/foreach}
</ul>