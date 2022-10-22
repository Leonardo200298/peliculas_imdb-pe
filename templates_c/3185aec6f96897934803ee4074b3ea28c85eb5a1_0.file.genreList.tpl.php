<?php
/* Smarty version 4.2.1, created on 2022-10-23 00:48:54
  from '/opt/lampp/htdocs/carpeta/leo-imdb/templates/genreList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63547356528c12_22714657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3185aec6f96897934803ee4074b3ea28c85eb5a1' => 
    array (
      0 => '/opt/lampp/htdocs/carpeta/leo-imdb/templates/genreList.tpl',
      1 => 1666478932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63547356528c12_22714657 (Smarty_Internal_Template $_smarty_tpl) {
?>

<h1><?php echo $_smarty_tpl->tpl_vars['generos']->value;?>
</h1>

  <h2>Crea tu pelicula</h2>
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
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genreArrays']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
    <ul class="list-group">
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

    </ul>
    <h1>Crear genero</h1>
    <form method="POST" action="add-genres">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Genero</label>
        <input name="nombre" type="text" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Crear</button>
    </form>
    <h1>Editar genero</h1>
    <form method="POST" action="edit-genres">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Genero</label>
        <input name="nombre" type="text" aria-describedby="emailHelp">
      </div>
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
      <button type="submit" class="btn btn-primary">Editar</button>
    </form>

<?php }
}
