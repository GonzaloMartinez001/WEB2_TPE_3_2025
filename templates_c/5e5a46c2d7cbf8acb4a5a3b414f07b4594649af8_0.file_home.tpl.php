<?php
/* Smarty version 5.6.0, created on 2025-10-22 01:46:06
  from 'file:./templates/home.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_68f81b3edd7dd1_35595271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e5a46c2d7cbf8acb4a5a3b414f07b4594649af8' => 
    array (
      0 => './templates/home.tpl',
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
function content_68f81b3edd7dd1_35595271 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\WEB2_TPE_3_2025\\templates';
?>
    <?php $_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>"Home - Personas"), (int) 0, $_smarty_current_dir);
?>
    <h1>Games List</h1>

    <div class="container table-responsive" >
        <table class = "table table-bordered bg-info">
            <thead>
                <th>Games</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Score</th>
                <th>Company</th>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('games'), 'game');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('game')->value) {
$foreach0DoElse = false;
?>
                        <tr>
                            <td> <?php echo $_smarty_tpl->getValue('game')->game_name;?>
 </td>
                            <td> <?php echo $_smarty_tpl->getValue('game')->genre;?>
 </td>
                            <td> <?php echo $_smarty_tpl->getValue('game')->year;?>
 </td>
                            <td> <?php echo $_smarty_tpl->getValue('game')->score;?>
 </td>
                            <td> <?php echo $_smarty_tpl->getValue('game')->company_name;?>
 </td>
                        </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>


        <table class = "table table-bordered bg-info">
            <thead>
                <th>Company List</th>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('compa'), 'company');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('company')->value) {
$foreach1DoElse = false;
?>
                        <tr>
                            <td> <?php echo $_smarty_tpl->getValue('company')->company_name;?>
 </td>
                        </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>


    <?php $_smarty_tpl->renderSubTemplate("file:footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
