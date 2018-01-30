<?php
/* Smarty version 3.1.31, created on 2018-01-28 12:25:38
  from "E:\OSPanel\domains\progecktShop\src\Views\SmartyTemplates\cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a6d9712bf23f6_52825110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bab81a8e3bcca35b20547867eae58aaa27563f76' => 
    array (
      0 => 'E:\\OSPanel\\domains\\progecktShop\\src\\Views\\SmartyTemplates\\cart.tpl',
      1 => 1517131537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6d9712bf23f6_52825110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168045a6d9712bb2240_96946874', "content");
?>
                                                                                            class="btn btn-success">Оформить</a></div><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/main.tpl");
}
/* {block "content"} */
class Block_168045a6d9712bb2240_96946874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_168045a6d9712bb2240_96946874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>КОРЗИНА</h1>
<table class="table">
    <thead>
    <tr>
        <th>Название</th>
        <th>Цена</th>
        <th>Колличество</th>
        <th>Управление</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['count'];?>
</td>
        <td><a href="/cart/delProductCart?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['key'];?>
" class="btn btn-danger">Удалить</a></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </tbody>
</table>
<hr>
<div class="text-right">Сумма: <?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
<br><a href="/cart/deleteCart" class="btn btn-danger">Очистить</a> <a href=""
            <?php
}
}
/* {/block "content"} */
}
