<?php
/* Smarty version 5.6.0, created on 2025-10-22 00:31:45
  from 'file:./templates/login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_68f809d1a420b5_94027770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70dff048ebbc7cb9ce80f1cdb9dbedbfbc65fcca' => 
    array (
      0 => './templates/login.tpl',
      1 => 1760571781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer2.tpl' => 1,
  ),
))) {
function content_68f809d1a420b5_94027770 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE-WEB2-2024-pt2\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>"Home - Personas"), (int) 0, $_smarty_current_dir);
?>
    <div class="d-flex row justify-content-center">
        <div class="col-6 border border-3">
            <form action="loguear" method="POST" class="form-group">
            <h1>Username</h1>
            <input type="text" name="username" placeholder="Username" required>
            <h1>Password</h1>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="login">
            </form>
            <a href="<?php echo (BASE_URL).('registrar');?>
"><button>Register</button></a>
        </div>
    </div>
<?php $_smarty_tpl->renderSubTemplate("file:footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
