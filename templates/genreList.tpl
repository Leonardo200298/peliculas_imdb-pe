

<h1>{$generos}</h1>

<ul class="list-group">
    {foreach from=$genreArrays item=$genre}
        <li class="list-group-item list-group-item-action list-group-item-danger"><a href='peliculas/{$genre->id_genero}'>Nombre de genero: {$genre->nombre}</a</li>
      
    {/foreach}
</ul>