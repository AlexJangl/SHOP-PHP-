<?php
/* Smarty version 3.1.31, created on 2018-01-28 02:16:41
  from "E:\OSPanel\domains\progecktShop\src\Views\SmartyTemplates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a6d085913b6e5_34672514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f64a1c870c6a6bfd7addf206aadee14ae7f55b9' => 
    array (
      0 => 'E:\\OSPanel\\domains\\progecktShop\\src\\Views\\SmartyTemplates\\login.tpl',
      1 => 1517094999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6d085913b6e5_34672514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120615a6d0859133fe8_16190854', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/main.tpl");
}
/* {block "content"} */
class Block_120615a6d0859133fe8_16190854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_120615a6d0859133fe8_16190854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="form-signin" method="post" action="/users/login" role="form">
    <h2 class="form-signin-heading">Вход</h2>
    <input type="email" name="email" class="form-control" placeholder="Email address" required>
    <br>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Вход</button>
</form>
<?php
}
}
/* {/block "content"} */
}
