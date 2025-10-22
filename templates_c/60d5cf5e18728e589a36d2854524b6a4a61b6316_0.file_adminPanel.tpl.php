<?php
/* Smarty version 5.6.0, created on 2025-10-22 00:32:41
  from 'file:./templates/adminPanel.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_68f80a09602d23_49101676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60d5cf5e18728e589a36d2854524b6a4a61b6316' => 
    array (
      0 => './templates/adminPanel.tpl',
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
function content_68f80a09602d23_49101676 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE-WEB2-2024-pt2\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>"Home - Personas"), (int) 0, $_smarty_current_dir);
?>

<div class = "container">
    <h3 class = "text-center">Admin panel</h3>
    <div class="btn-container">
        <a href="formulario" class="btn btn-primary py-2 px-4 rounded-lg text-white">Add</a>
        <span>Press here to add games or companies </span>
        <div class="d-flex">
            <a href="selectCompany" class="mt-3 btn btn-primary py-2 px-4 rounded-lg text-white">Get games by company</a>
            <span class="mt-4 mx-2">Press here to search games by companies </span>
        </div>
    </div>

    <h1>Games List</h1>
    <div class="container table-responsive">
        <table class = "table table-bordered bg-info">
            <thead>
            <th>Games</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Score</th>
            <th>Company</th>
            <th></th>
            </thead>
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
                    <td> <a href="deleteGame/<?php echo $_smarty_tpl->getValue('game')->game_ID;?>
" type="button" class='btn btn-danger ml-auto'>Delete</a> </td>
                    <td> <a href="showEditGame/<?php echo $_smarty_tpl->getValue('game')->game_ID;?>
" type="button" class="btn btn-secondary">Edit</a> </td>
                </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <table class = "table table-bordered bg-info">
                <thead>
                <th>Company List</th>
                </thead>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('compa'), 'company');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('company')->value) {
$foreach1DoElse = false;
?>
                    <tr>
                        <td> <?php echo $_smarty_tpl->getValue('company')->company_name;?>
 </td>
                        <td> <a href="deleteCompany/<?php echo $_smarty_tpl->getValue('company')->company_ID;?>
" type="button" data-toggle="tooltip" data-placement="top" title="WARNING: If you delete the company, all the games will be deleted with them" class='btn btn-danger ml-auto'>Delete</a> </td>
                        <td> <a href="showEditCompany/<?php echo $_smarty_tpl->getValue('company')->company_ID;?>
" type="button" class="btn btn-secondary">Edit</a> </td>
                    </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </table>
    </div>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
