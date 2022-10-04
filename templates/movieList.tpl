<h1>{$peliculas}</h1>
<ul>
    {foreach from=$movieArrays item=$movie}
        <li>{$movie->nombre}</li>
        <li>{$movie->anio}</li>
        <li>{$movie->produccion}</li>
        <li>{$movie->recaudacion}</li>        
    {/foreach}
</ul>