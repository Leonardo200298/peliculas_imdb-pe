

<h1>{$generos}</h1>

{if !isset($smarty.session.USER_ID)}
  <ul class="list-group">
    {foreach from=$genreArrays item=$genre}
      <li class="list-group-item list-group-item-action list-group-item-danger"><a
          href='peliculas/{$genre->id_genero}'>Nombre de genero: {$genre->genero}</a>
      </li>

    {/foreach}
  </ul>

{else}
  <h2>Crea tu pelicula</h2>
<form method="POST" action="add">
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
    <select name="genero" class="form-select">
      {foreach from=$genreArrays item=$genre}
        <option value="{$genre->id_genero}">{$genre->genero}</option>
      {/foreach}
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Crear</button>
</form>
  {foreach from=$genreArrays item=$genre}
    <ul class="list-group">
      <li>
        <a href='peliculas/{$genre->id_genero}'>Nombre de genero: {$genre->genero}</a>
        <a href="delete-genres/{$genre->id_genero}" class="btn btn-outline-danger">borrar</a>
        
      </li>
    {/foreach}

    </ul>
    <h1>Crear genero</h1>
    <form method="POST" action="add-genres">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Genero</label>
        <input name="nombre" type="text" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Crear</button>
    </form>
    <h1>Editar genero</h1>
    <form method="POST" action="edit-genres">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Genero</label>
        <input name="nombre" type="text" aria-describedby="emailHelp">
      </div>
      <select name="genero" class="form-select">
        {foreach from=$genreArrays item=$genre}
          <option value="{$genre->id_genero}">{$genre->genero}</option>
        {/foreach}
      </select>
      <button type="submit" class="btn btn-primary">Editar</button>
    </form>

{/if}