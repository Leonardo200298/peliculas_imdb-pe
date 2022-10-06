<h1>{$detalles}</h1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<ul class="list-group">
{foreach from=$details item=$detail}
      <li class="list-group-item list-group-item-success">Nombre: {$detail->nombre}</li>
      <li class="list-group-item list-group-item-success">Fecha de lanzamiento: {$detail->anio}</li>
      <li class="list-group-item list-group-item-success">Costo de produccion: {$detail->produccion}</li>
      <li class="list-group-item list-group-item-success">Recaudacion: {$detail->recaudacion}</li>     
       
{/foreach}
</ul>























