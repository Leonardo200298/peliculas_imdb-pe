<?php
/* Smarty version 4.2.1, created on 2022-10-11 19:55:19
  from '/opt/lampp/htdocs/carpeta/leo-imdb/templates/formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345ae07670154_04256520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14b978abd87df6d2e134650f15e6f576dbbe1a83' => 
    array (
      0 => '/opt/lampp/htdocs/carpeta/leo-imdb/templates/formLogin.tpl',
      1 => 1665436635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6345ae07670154_04256520 (Smarty_Internal_Template $_smarty_tpl) {
?><head>

  <base href="<?php echo BASE_URL;?>
">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<form method="POST" action="validacion">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Constraseña</label>
    <input type="password" name="password">
  </div>

  <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>

    <div class="alert alert-danger mt-3">
      <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>

  <?php }?>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form><?php }
}
