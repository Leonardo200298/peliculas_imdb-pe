<?php
/* Smarty version 4.2.1, created on 2022-10-10 21:32:26
  from '/opt/lampp/htdocs/carpeta/leo-imdb/templates/peliculasConEsteGenre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344734a193fd7_11047531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3865a3c6f68284eb2b09586908e11cae9664e848' => 
    array (
      0 => '/opt/lampp/htdocs/carpeta/leo-imdb/templates/peliculasConEsteGenre.tpl',
      1 => 1665430340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6344734a193fd7_11047531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['pelicula']->value;?>
</h1>
<ul class="list-group">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generosDePeliculas']->value, 'peli');
$_smarty_tpl->tpl_vars['peli']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['peli']->value) {
$_smarty_tpl->tpl_vars['peli']->do_else = false;
?>
        <li class="list-group-item list-group-item-action list-group-item-success">nombre:<?php echo $_smarty_tpl->tpl_vars['peli']->value->nombre;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
