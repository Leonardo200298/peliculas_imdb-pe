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

      <option>aventura</option>
      <option>ciencia ficcion</option>
      <option>comedia</option>
      <option>terror</option>
      <option>accion</option>
      <option>romance</option>
      <option>musical</option>
      <option>drama</option>
      <option>animacion</option>



    </select>
  </div>
  <button type="submit" class="btn btn-primary">Crear</button>
</form>