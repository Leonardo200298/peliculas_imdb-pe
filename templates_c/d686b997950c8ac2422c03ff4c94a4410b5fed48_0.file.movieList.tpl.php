<?php
/* Smarty version 4.2.1, created on 2022-10-07 16:53:59
  from '/opt/lampp/htdocs/carpeta/leo-imdb/templates/movieList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63403d878f7de2_46770509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd686b997950c8ac2422c03ff4c94a4410b5fed48' => 
    array (
      0 => '/opt/lampp/htdocs/carpeta/leo-imdb/templates/movieList.tpl',
      1 => 1665154430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63403d878f7de2_46770509 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['peliculas']->value;?>
</h1>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movieArrays']->value, 'movie');
$_smarty_tpl->tpl_vars['movie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->do_else = false;
?>
        <li class="list-group-item list-group-item-action list-group-item-primary"><a href='detalles/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id_peliculas;?>
'>Nombre: <?php echo $_smarty_tpl->tpl_vars['movie']->value->nombre;?>
</a></li>
       
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
