<?php
/* Smarty version 5.6.0, created on 2025-10-22 00:31:21
  from 'file:header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_68f809b99d8333_48909473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ab3465b241dc2842a5cf7449c210c678bd92251' => 
    array (
      0 => 'header.tpl',
      1 => 1760571781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f809b99d8333_48909473 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE-WEB2-2024-pt2\\templates';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL;?>
">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>
css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">


    <title><?php echo $_smarty_tpl->getValue('titulo');?>
</title>
</head>
<body>
    <header>
        <navbar class="row border border-4 m-1 d-flex justify-content-center">
            <h1 class=""><span class="text-success">My</span> <span class="text-warning">Game</span> <span class="text-danger"> List</span>  </h1>
            <?php if (!$_smarty_tpl->getValue('props')['islogged']) {?>
                <div class="h-100 mx-3"><a href="<?php echo (BASE_URL).('login');?>
"><button class="h-100">Log In</button></a></div>
            <?php } else { ?>
                <div class="h-100 mx-3"><a href="<?php echo (BASE_URL).('logout');?>
"><button class="h-100">Log Out</button></a></div>

            <?php }?>


        </navbar>
    </header>
<?php }
}
