<?php
/* Smarty version 4.2.1, created on 2022-10-09 20:11:29
  from '/opt/lampp/htdocs/carpeta/leo-imdb/templates/detailMovies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63430ed16c7f25_39440601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32f79100c4c860cbb4be3dd29f634561743939a4' => 
    array (
      0 => '/opt/lampp/htdocs/carpeta/leo-imdb/templates/detailMovies.tpl',
      1 => 1665339084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63430ed16c7f25_39440601 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['detalles']->value;?>
</h1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<ul class="list-group">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['details']->value, 'detail');
$_smarty_tpl->tpl_vars['detail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['detail']->value) {
$_smarty_tpl->tpl_vars['detail']->do_else = false;
?>
      <li class="list-group-item list-group-item-success">Nombre: <?php echo $_smarty_tpl->tpl_vars['detail']->value->nombre;?>
</li>
      <li class="list-group-item list-group-item-success">Fecha de lanzamiento: <?php echo $_smarty_tpl->tpl_vars['detail']->value->anio;?>
</li>
      <li class="list-group-item list-group-item-success">Costo de produccion: <?php echo $_smarty_tpl->tpl_vars['detail']->value->produccion;?>
</li>
      <li class="list-group-item list-group-item-success">Recaudacion: <?php echo $_smarty_tpl->tpl_vars['detail']->value->recaudacion;?>
</li>     
      <li class="list-group-item list-group-item-success">nombre de genero: <?php echo $_smarty_tpl->tpl_vars['detail']->value->id_genero;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</ul>























<?php }
}
