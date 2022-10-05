<?php
/* Smarty version 4.2.1, created on 2022-10-05 22:56:45
  from '/opt/lampp/htdocs/carpeta/leo-imdb/templates/genreList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633def8d811959_21627539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3185aec6f96897934803ee4074b3ea28c85eb5a1' => 
    array (
      0 => '/opt/lampp/htdocs/carpeta/leo-imdb/templates/genreList.tpl',
      1 => 1665003399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633def8d811959_21627539 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['generos']->value;?>
</h1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genreArrays']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
        <li class="list-group-item list-group-item-action list-group-item-danger">Nombre de genero: <?php echo $_smarty_tpl->tpl_vars['genre']->value->nombre;?>
</li>
      
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
