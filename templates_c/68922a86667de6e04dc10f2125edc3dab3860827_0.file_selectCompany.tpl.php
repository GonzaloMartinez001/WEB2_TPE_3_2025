<?php
/* Smarty version 5.6.0, created on 2025-10-22 00:34:16
  from 'file:./templates/selectCompany.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_68f80a68d2d1a0_54731150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68922a86667de6e04dc10f2125edc3dab3860827' => 
    array (
      0 => './templates/selectCompany.tpl',
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
function content_68f80a68d2d1a0_54731150 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE-WEB2-2024-pt2\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>"Home - Personas"), (int) 0, $_smarty_current_dir);
?>

<h3>Select company</h3>
<form class="form-alta m-4" action='games-company' method="POST">
    <select class="form-select-m3" aria-label="Default select example" name="company_ID">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('companies'), 'company');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('company')->value) {
$foreach0DoElse = false;
?>
            <option value="<?php echo $_smarty_tpl->getValue('company')->company_ID;?>
"><?php echo $_smarty_tpl->getValue('company')->company_name;?>
</option>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </select>
    <button type="submit" class="btn btn-primary">Get games</button>
</form>



<?php $_smarty_tpl->renderSubTemplate("file:footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
