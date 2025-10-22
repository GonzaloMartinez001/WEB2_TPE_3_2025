<?php
/* Smarty version 5.6.0, created on 2025-10-22 01:55:01
  from 'file:./templates/editGameForm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_68f81d551ba7a1_33511198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c00aecdb9d4f3dfbc87c551bb5bdf44b0153ed0b' => 
    array (
      0 => './templates/editGameForm.tpl',
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
function content_68f81d551ba7a1_33511198 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\WEB2_TPE_3_2025\\templates';
?>

<?php $_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>"Home - Personas"), (int) 0, $_smarty_current_dir);
?>
<div class="container">
    <h2 class="mt-4">Edit games</h2>
    <form action="editGame" method="POST"  enctype="multipart/form-data">
        <input type="hidden" name="game_ID" value="<?php echo $_smarty_tpl->getValue('game_ID');?>
">
        <div class="mb-3">
            <label for="gameName" class="form-label">Name of the game:</label>
            <input type="text" name="gameName" class="form-control" value=" ">
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre:</label>
            <input type="text" name="genre" class="form-control" value=" ">
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year:</label>
            <input type="text" name="year" class="form-control" value= " ">
        </div>

        <div class="mb-3">
            <label for="score" class="form-label">Puntuation:</label>
            <input type="text" name="score" class="form-control" value= " ">
        </div>



        <input type="submit" value="Save changes" class="btn btn-primary"></input>
    </form>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
