<?php
/* Smarty version 4.2.1, created on 2022-10-12 21:08:38
  from '/opt/lampp/htdocs/carpeta/leo-imdb/templates/detailMovies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634710b673c766_96351718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32f79100c4c860cbb4be3dd29f634561743939a4' => 
    array (
      0 => '/opt/lampp/htdocs/carpeta/leo-imdb/templates/detailMovies.tpl',
      1 => 1665601711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634710b673c766_96351718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['detalles']->value;?>
</h1>

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
