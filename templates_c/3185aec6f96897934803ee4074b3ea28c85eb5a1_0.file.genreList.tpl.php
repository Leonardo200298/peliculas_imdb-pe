<?php
/* Smarty version 4.2.1, created on 2022-10-15 23:07:36
  from '/opt/lampp/htdocs/carpeta/leo-imdb/templates/genreList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b2118247358_86939270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3185aec6f96897934803ee4074b3ea28c85eb5a1' => 
    array (
      0 => '/opt/lampp/htdocs/carpeta/leo-imdb/templates/genreList.tpl',
      1 => 1665867707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634b2118247358_86939270 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Crea tu pelicula</h2>
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
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genreArrays']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['genre']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
</option>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



    </select>
  </div>
  <button type="submit" class="btn btn-primary">Crear</button>
</form>

<h1><?php echo $_smarty_tpl->tpl_vars['generos']->value;?>
</h1>

<ul class="list-group">
  <?php if (!(isset($_SESSION['USER_ID']))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genreArrays']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
      <li class="list-group-item list-group-item-action list-group-item-danger"><a
          href='peliculas/<?php echo $_smarty_tpl->tpl_vars['genre']->value->id_genero;?>
'>Nombre de genero: <?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
</a>
      </li>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <?php } else { ?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genreArrays']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>

      <li>
        <a href='peliculas/<?php echo $_smarty_tpl->tpl_vars['genre']->value->id_genero;?>
'>Nombre de genero: <?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
</a>
        <a href="delete-genres/<?php echo $_smarty_tpl->tpl_vars['genre']->value->id_genero;?>
" class="btn btn-outline-danger">borrar</a>

      </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <?php }?>

</ul>

<form method="POST" action="add-genres">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Genero</label>
    <input name="nombre" type="text" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Crear</button>
</form><?php }
}
