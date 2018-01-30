<?php
/* Smarty version 3.1.31, created on 2018-01-28 00:58:07
  from "E:\OSPanel\domains\progecktShop\src\Views\SmartyTemplates\catalog.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a6cf5ef7b2576_64674036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '585938e88db4fe77ad271740e19aba3c4e13f8eb' => 
    array (
      0 => 'E:\\OSPanel\\domains\\progecktShop\\src\\Views\\SmartyTemplates\\catalog.tpl',
      1 => 1517090286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6cf5ef7b2576_64674036 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56825a6cf5ef75bb16_27100095', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout/main.tpl');
}
/* {block "content"} */
class Block_56825a6cf5ef75bb16_27100095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_56825a6cf5ef75bb16_27100095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>

    <div class="col-sm-6 col-md-3" >
        <div class="thumbnail sizeBlock">
            <img id="sizeImg" src="/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
" >
            <div class="caption" >
                <h3><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h3>
                <p style="text-overflow: ellipsis; white-space:nowrap; overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>
                <b class="text-right"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 грн.</b>
                <p><a href="/product/show?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="btn btn-primary" role="button">Подробнее</a>
                    <a href="/cart/add?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="btn btn-default" role="button">Купить</a></p>
            </div>
        </div>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div>

<?php
}
}
/* {/block "content"} */
}
