<?php
/* Smarty version 3.1.31, created on 2018-01-30 22:56:18
  from "E:\OSPanel\domains\progecktShop\src\Views\SmartyTemplates\Admin\edit_product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a70cde28a19f2_22740204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6744c42019939e201d597350457c6783f9d466fa' => 
    array (
      0 => 'E:\\OSPanel\\domains\\progecktShop\\src\\Views\\SmartyTemplates\\Admin\\edit_product.tpl',
      1 => 1517342175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a70cde28a19f2_22740204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88695a70cde2875765_04319405', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Admin/layout/main.tpl");
}
/* {block "content"} */
class Block_88695a70cde2875765_04319405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_88695a70cde2875765_04319405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="table-responsive">
    <h1>Редактирование продукта</h1>
    <br>
<form enctype="multipart/form-data" action="/admin/update_product" method="post">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="form-control">
    <input type="text" name="name" placeholder="имя" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="form-control">
    <br>
    <textarea type="text" name="description" placeholder="описание"  class="form-control"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</textarea>
    <br>
    <input type="number" name="price" placeholder="цена" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
" class="form-control">
    <br>
    <input type="file" name="img">
    <img src="/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
" style=" width: 200px" alt="">
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
