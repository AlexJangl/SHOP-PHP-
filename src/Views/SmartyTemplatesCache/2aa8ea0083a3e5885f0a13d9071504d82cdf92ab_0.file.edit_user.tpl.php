<?php
/* Smarty version 3.1.31, created on 2018-01-30 22:44:29
  from "E:\OSPanel\domains\progecktShop\src\Views\SmartyTemplates\Admin\edit_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a70cb1d2866a5_81920158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2aa8ea0083a3e5885f0a13d9071504d82cdf92ab' => 
    array (
      0 => 'E:\\OSPanel\\domains\\progecktShop\\src\\Views\\SmartyTemplates\\Admin\\edit_user.tpl',
      1 => 1517341415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a70cb1d2866a5_81920158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_234755a70cb1d11ee40_06377994', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Admin/layout/main.tpl");
}
/* {block "content"} */
class Block_234755a70cb1d11ee40_06377994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_234755a70cb1d11ee40_06377994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="table-responsive">
    <h1>Редактирование продукта</h1>
    <br>
    <form action="/admin/update_user" method="post">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="form-control">
        <input type="text" name="name" placeholder="имя" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" class="form-control">
        <br>
        <input type="email" name="email" placeholder="email"  class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
">
        <br>
        <input type="text" name="password" placeholder="пароль" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
" class="form-control">
        <br>
        <p><input type="radio" name="role" placeholder="роль" value="admin" <?php if (($_smarty_tpl->tpl_vars['user']->value['role'] === 'admin')) {?> checked <?php }?> >Администратор</p>
        <p><input type="radio" name="role" placeholder="роль" value="user" <?php if (($_smarty_tpl->tpl_vars['user']->value['role'] === 'user')) {?> checked <?php }?>>Пользоватаель</p>
        <br>

        <br>
        <input type="submit" class="btn btn-success" value="Обновить">
    </form>
</div>
<?php
}
}
/* {/block "content"} */
}
