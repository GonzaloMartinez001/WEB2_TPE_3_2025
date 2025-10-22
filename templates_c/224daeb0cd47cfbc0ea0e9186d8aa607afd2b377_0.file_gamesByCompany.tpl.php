<?php
/* Smarty version 5.6.0, created on 2025-10-22 00:34:21
  from 'file:./templates/gamesByCompany.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_68f80a6d3d2a35_96322971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '224daeb0cd47cfbc0ea0e9186d8aa607afd2b377' => 
    array (
      0 => './templates/gamesByCompany.tpl',
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
function content_68f80a6d3d2a35_96322971 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE-WEB2-2024-pt2\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>"Home - Personas"), (int) 0, $_smarty_current_dir);
?>

<div class="container table-responsive">
    <table class = "table table-bordered bg-info">
        <thead>
        <th>Games</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Score</th>
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
