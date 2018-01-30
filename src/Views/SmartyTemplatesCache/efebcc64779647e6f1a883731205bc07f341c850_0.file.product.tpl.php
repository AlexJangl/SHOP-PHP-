<?php
/* Smarty version 3.1.31, created on 2018-01-28 01:32:25
  from "E:\OSPanel\domains\progecktShop\src\Views\SmartyTemplates\product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a6cfdfa000ea6_83760450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efebcc64779647e6f1a883731205bc07f341c850' => 
    array (
      0 => 'E:\\OSPanel\\domains\\progecktShop\\src\\Views\\SmartyTemplates\\product.tpl',
      1 => 1517092344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6cfdfa000ea6_83760450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_311725a6cfdf9f104b9_02478989', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout/main.tpl');
}
/* {block "content"} */
class Block_311725a6cfdf9f104b9_02478989 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_311725a6cfdf9f104b9_02478989',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="thumbnail">
            <img id="sizeImg1" src="/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
">
            <div class="caption">
                <h3><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>
                <b class="text-right"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 грн.</b>
                <p><a href="#" class="btn btn-primary" role="button">Купить</a> </p>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block "content"} */
}
