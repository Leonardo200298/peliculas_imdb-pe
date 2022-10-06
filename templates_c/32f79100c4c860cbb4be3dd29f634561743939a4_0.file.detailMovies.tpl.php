<?php
/* Smarty version 4.2.1, created on 2022-10-06 15:50:45
  from '/opt/lampp/htdocs/carpeta/leo-imdb/templates/detailMovies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633edd351bb209_52858770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32f79100c4c860cbb4be3dd29f634561743939a4' => 
    array (
      0 => '/opt/lampp/htdocs/carpeta/leo-imdb/templates/detailMovies.tpl',
      1 => 1665064242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633edd351bb209_52858770 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['detalles']->value;?>
</h1>

<ul class="list-group">
   <li><?php echo $_smarty_tpl->tpl_vars['moviesDetail']->value->nombre;?>
</li>
   <li><?php echo $_smarty_tpl->tpl_vars['moviesDetail']->value->anio;?>
</li>
   <li><?php echo $_smarty_tpl->tpl_vars['moviesDetail']->value->produccion;?>
</li>
   <li><?php echo $_smarty_tpl->tpl_vars['moviesDetail']->value->recaudacion;?>
</li>
</ul><?php }
}
