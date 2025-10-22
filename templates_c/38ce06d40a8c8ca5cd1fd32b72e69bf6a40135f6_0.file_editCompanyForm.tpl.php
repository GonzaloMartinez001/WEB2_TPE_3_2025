<?php
/* Smarty version 5.6.0, created on 2025-10-22 01:58:26
  from 'file:./templates/editCompanyForm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_68f81e22d0a488_74926191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38ce06d40a8c8ca5cd1fd32b72e69bf6a40135f6' => 
    array (
      0 => './templates/editCompanyForm.tpl',
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
function content_68f81e22d0a488_74926191 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\WEB2_TPE_3_2025\\templates';
?>

<?php $_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>"Home - Personas"), (int) 0, $_smarty_current_dir);
?>
<div class="container">
    <h2 class="mt-4">Edit company</h2>
    <form action="editCompany" method="POST"  enctype="multipart/form-data">
        <input type="hidden" name="company_ID" value="<?php echo $_smarty_tpl->getValue('company_ID');?>
">
        <div class="mb-3">
            <label for="companyName" class="form-label">Name of the company:</label>
            <input type="text" name="companyName" class="form-control" value=" ">
        </div>
        <input type="submit" value="Save changes" class="btn btn-primary"></input>
    </form>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
