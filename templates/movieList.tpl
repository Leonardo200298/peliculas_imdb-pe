{include file="header.tpl"}

<h1>{$peliculas}</h1>
{if !isset($smarty.session.USER_ID) && $movie == "movie"}
    <ul class="list-group">
        {foreach from=$movieArrays item=$movie}
            <li class="list-group-item list-group-item-action list-group-item-primary"><a
                    href='detalles/{$movie->id_peliculas}'>Nombre: {$movie->nombre}</a></li>

        {/foreach}
    </ul>

{else}

    
    <ul class="list-group">
        {foreach from=$movieArrays item=$movie}
            <li class="list-group-item list-group-item-action list-group-item-primary"><a href="borrar/{$movie->id_peliculas}"
                    type="button" class="btn btn-outline-danger">Borrar</a>
                Nombre: <a href='detalles/{$movie->id_peliculas}'>{$movie->nombre}</a>
            </li>

        {/foreach}
    </ul>



    <h1>Editar pelicula</h1>
    <form method="POST" action="edit-movies">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input name="nombre" type="text" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fecha de lanzamiento</label>
            <input name="fecha-de-lanzamiento" type="text">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Costo de producción</label>
            <input name="costo-de-produccion" type="text">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Recaudación</label>
            <input name="recaudacion" type="text">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Seleccione un genero</label>
            <select name="pelicula" class="form-select">
                {foreach from=$movieArrays item=$movie}
                    <option value="{$movie->id_peliculas}">{$movie->nombre}</option>
                {/foreach}
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>



{/if}