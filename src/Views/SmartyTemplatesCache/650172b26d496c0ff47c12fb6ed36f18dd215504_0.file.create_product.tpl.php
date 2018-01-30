<?php
/* Smarty version 3.1.31, created on 2018-01-30 22:57:26
  from "E:\OSPanel\domains\progecktShop\src\Views\SmartyTemplates\Admin\create_product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a70ce26a4e5e9_04456566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '650172b26d496c0ff47c12fb6ed36f18dd215504' => 
    array (
      0 => 'E:\\OSPanel\\domains\\progecktShop\\src\\Views\\SmartyTemplates\\Admin\\create_product.tpl',
      1 => 1517340791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a70ce26a4e5e9_04456566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36275a70ce26a41d03_19207627', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Admin/layout/main.tpl");
}
/* {block "content"} */
class Block_36275a70ce26a41d03_19207627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_36275a70ce26a41d03_19207627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="table-responsive">
    <h1>Создание продукта</h1>
    <br>
    <form enctype="multipart/form-data" action="/admin/save_product" method="post">
        <input type="text" name="name" placeholder="имя" class="form-control">
        <br>
        <textarea type="text" name="description" placeholder="описание"  class="form-control"></textarea>
        <br>
        <input type="number" name="price" placeholder="цена" class="form-control">
        <br>
        <input type="file" name="img">
        <br>
        <input type="submit" class="btn btn-success" value="Добавить">
    </form>
</div>
<?php
}
}
/* {/block "content"} */
}
