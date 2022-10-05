<h1>{$generos}</h1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<ul class="list-group">
    {foreach from=$genreArrays item=$genre}
        <li class="list-group-item list-group-item-action list-group-item-danger">Nombre de genero: {$genre->nombre}</li>
      
    {/foreach}
</ul>