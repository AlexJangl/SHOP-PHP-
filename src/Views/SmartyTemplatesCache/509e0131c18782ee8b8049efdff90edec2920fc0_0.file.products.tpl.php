<?php
/* Smarty version 3.1.31, created on 2018-01-30 22:26:37
  from "E:\OSPanel\domains\progecktShop\src\Views\SmartyTemplates\Admin\products.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a70c6edf02dd1_94959615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '509e0131c18782ee8b8049efdff90edec2920fc0' => 
    array (
      0 => 'E:\\OSPanel\\domains\\progecktShop\\src\\Views\\SmartyTemplates\\Admin\\products.tpl',
      1 => 1517340391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a70c6edf02dd1_94959615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101055a70c6ede63460_62843106', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Admin/layout/main.tpl");
}
/* {block "content"} */
class Block_101055a70c6ede63460_62843106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_101055a70c6ede63460_62843106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2 class="sub-header">Товары</h2>
<div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <a href="/admin/create_product" type="button" class="btn btn-success">Добавить</a>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Цена</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td>
                            <td><div class="btn-group">
                <a href="/admin/edit_product?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" type="button" class="btn btn-primary">Редактир</a>
                <a href="/admin/delete_product?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
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
