<?php
/* Smarty version 4.2.1, created on 2022-10-12 22:44:21
  from '/opt/lampp/htdocs/carpeta/leo-imdb/templates/movieList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634727256c6981_23798990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd686b997950c8ac2422c03ff4c94a4410b5fed48' => 
    array (
      0 => '/opt/lampp/htdocs/carpeta/leo-imdb/templates/movieList.tpl',
      1 => 1665607380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634727256c6981_23798990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['peliculas']->value;?>
</h1>
<!-- CSS only -->
<ul class="list-group">
    <?php if (!(isset($_SESSION['USER_ID']))) {?>
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
        
    <?php } else { ?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movieArrays']->value, 'movie');
$_smarty_tpl->tpl_vars['movie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->do_else = false;
?>
            <li class="list-group-item list-group-item-action list-group-item-primary"><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id_peliculas;?>
" type="button" class="btn btn-outline-danger">Borrar</a>
            <button type="button" class="btn btn-outline-success">Editar</button> Nombre: <a href='detalles/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id_peliculas;?>
'><?php echo $_smarty_tpl->tpl_vars['movie']->value->nombre;?>
</a></li>
            
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</ul>
<?php }
}
