{include file="header.tpl" }

<h1>{$detalles}</h1>

<ul class="list-group">
{foreach from=$details item=$detail}
      <li class="list-group-item list-group-item-success">Nombre: {$detail->nombre}</li>
      <li class="list-group-item list-group-item-success">Fecha de lanzamiento: {$detail->anio}</li>
      <li class="list-group-item list-group-item-success">Costo de produccion: {$detail->produccion}</li>
      <li class="list-group-item list-group-item-success">Recaudacion: {$detail->recaudacion}</li>     
      <li class="list-group-item list-group-item-success">nombre de genero: {$detail->id_genero}</li>
{/foreach}

</ul>























