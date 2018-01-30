<?php
/* Smarty version 3.1.31, created on 2018-01-30 22:28:12
  from "E:\OSPanel\domains\progecktShop\src\Views\SmartyTemplates\Admin\users.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a70c74cb56348_30395925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '597761c29991f399c8e5fc4bbbf36c432cd585ff' => 
    array (
      0 => 'E:\\OSPanel\\domains\\progecktShop\\src\\Views\\SmartyTemplates\\Admin\\users.tpl',
      1 => 1517340491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a70c74cb56348_30395925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169495a70c74cb0ed61_91550836', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Admin/layout/main.tpl");
}
/* {block "content"} */
class Block_169495a70c74cb0ed61_91550836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_169495a70c74cb0ed61_91550836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="sub-header">Пользователи</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <a href="/admin/create_user" type="button" class="btn btn-success">Добавить</a>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Почта</th>
            <th>Пароль</th>
            <th>Роль</th>

        </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>

            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['role'];?>
</td>
                <td><div class="btn-group">
                        <a href="/admin/edit_user?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" type="button" class="btn btn-primary">Редактир</a>
                        <a href="/admin/delete_user?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" type="button" class="btn btn-danger">Удалить</a>
                    </div>
                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


        </tbody>
    </table>
</div>
<?php
}
}
/* {/block "content"} */
}
