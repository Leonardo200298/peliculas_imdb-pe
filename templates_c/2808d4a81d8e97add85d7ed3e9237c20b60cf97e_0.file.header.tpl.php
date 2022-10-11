<?php
/* Smarty version 4.2.1, created on 2022-10-11 20:32:26
  from '/opt/lampp/htdocs/carpeta/leo-imdb/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345b6baa86b74_91290843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2808d4a81d8e97add85d7ed3e9237c20b60cf97e' => 
    array (
      0 => '/opt/lampp/htdocs/carpeta/leo-imdb/templates/header.tpl',
      1 => 1665513139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6345b6baa86b74_91290843 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Leo imdb</title>
    </head>
<body>
<?php if (!(isset($_SESSION['USER_ID']))) {?>
    <h1>Logueate <span><a href="login/">aqui</a></span></h1>
<?php } else { ?>
    <a href="logout">Logout user:<?php echo $_SESSION['USER_EMAIL'];?>
</a>
<?php }?>
</body><?php }
}
