<?php
/* Smarty version 5.6.0, created on 2025-10-22 00:34:07
  from 'file:./templates/formularioJuego.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_68f80a5fcd8a48_30660402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6773c26fcb3ebc93b7fa2ca840ee44822cf850a3' => 
    array (
      0 => './templates/formularioJuego.tpl',
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
function content_68f80a5fcd8a48_30660402 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE-WEB2-2024-pt2\\templates';
?>
    <?php $_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>"Home - Personas"), (int) 0, $_smarty_current_dir);
?>
    <div class="row col-12 d-flex justify-content-center">
    <div class="col-12">
        <h1 class="text-center m-4">Agregar Juego</h1>
    </div>
    <form action="agregarJuego" method="POST" class="form-group " enctype="multipart/form-data">
        <div class="col-12 mb-3">
            <input type="text" name="gameName" placeholder="Game Name" required>
            <input type="text" name="genre" placeholder="Genre" required>
            <input type="text" name="year" placeholder="Year" required>
            <input type="text" name="score" placeholder="Score" required>
        </div>
        <span>Companys:</span><select name="company" class="custom-select mb-3">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('company'), 'compa');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('compa')->value) {
$foreach0DoElse = false;
?>
                <option value="<?php echo $_smarty_tpl->getValue('compa')->company_ID;?>
"><?php echo $_smarty_tpl->getValue('compa')->company_name;?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
        <input class="text-center m-4" type="submit" value="Agregar">
    </form>
</div>
    <div class="col-12">
        <h1 class="text-center m-4">Agregar Compania</h1>
    </div>
    <form action="agregarCompania" method="POST" class="form-group " enctype="multipart/form-data">
        <div class="col-12 mb-3">
            <input type="text" name="companyName" placeholder="Company Name" required>
        </div>
        <input class="text-center m-4" type="submit" value="Add">
    </form>
    <?php $_smarty_tpl->renderSubTemplate("file:footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
