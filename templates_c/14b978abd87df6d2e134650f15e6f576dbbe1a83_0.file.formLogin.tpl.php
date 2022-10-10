<?php
/* Smarty version 4.2.1, created on 2022-10-10 18:13:21
  from '/opt/lampp/htdocs/carpeta/leo-imdb/templates/formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634444a1df8712_96637859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14b978abd87df6d2e134650f15e6f576dbbe1a83' => 
    array (
      0 => '/opt/lampp/htdocs/carpeta/leo-imdb/templates/formLogin.tpl',
      1 => 1665418399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634444a1df8712_96637859 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" action="lista">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form><?php }
}
