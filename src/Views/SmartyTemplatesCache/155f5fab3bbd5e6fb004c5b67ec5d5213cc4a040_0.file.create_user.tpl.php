<?php
/* Smarty version 3.1.31, created on 2018-01-30 22:48:39
  from "E:\OSPanel\domains\progecktShop\src\Views\SmartyTemplates\Admin\create_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a70cc1732fd96_29188795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '155f5fab3bbd5e6fb004c5b67ec5d5213cc4a040' => 
    array (
      0 => 'E:\\OSPanel\\domains\\progecktShop\\src\\Views\\SmartyTemplates\\Admin\\create_user.tpl',
      1 => 1517340790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a70cc1732fd96_29188795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_248095a70cc17325737_23842323', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Admin/layout/main.tpl");
}
/* {block "content"} */
class Block_248095a70cc17325737_23842323 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_248095a70cc17325737_23842323',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="table-responsive">
    <h1>Создание пользователя</h1>
    <br>
    <form action="/admin/save_user" method="post">
        <input type="text" name="name" placeholder="имя" class="form-control">
        <br>
        <textarea type="email" name="email" placeholder="email"  class="form-control"></textarea>
        <br>
        <input type="text" name="password" placeholder="пароль" class="form-control">
        <br>

        <br>
        <input type="submit" class="btn btn-success" value="Добавить">
    </form>
</div>
<?php
}
}
/* {/block "content"} */
}
