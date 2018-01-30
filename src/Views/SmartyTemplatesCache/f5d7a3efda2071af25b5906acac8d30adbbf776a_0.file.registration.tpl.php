<?php
/* Smarty version 3.1.31, created on 2018-01-28 02:05:54
  from "E:\OSPanel\domains\progecktShop\src\Views\SmartyTemplates\registration.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a6d05d250fe71_81692711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5d7a3efda2071af25b5906acac8d30adbbf776a' => 
    array (
      0 => 'E:\\OSPanel\\domains\\progecktShop\\src\\Views\\SmartyTemplates\\registration.tpl',
      1 => 1517094352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6d05d250fe71_81692711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213205a6d05d2506a84_01873582', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/main.tpl");
}
/* {block "content"} */
class Block_213205a6d05d2506a84_01873582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_213205a6d05d2506a84_01873582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="form-signin" method="post" action="/users/registration" role="form">
    <h2 class="form-signin-heading">Заполните форму</h2>
    <input type="text" name="name" class="form-control" placeholder="Name" required autofocus>
    <br>
    <input type="email" name="email" class="form-control" placeholder="Email address" required>
    <br>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Регистрация</button>
</form>
<?php
}
}
/* {/block "content"} */
}
