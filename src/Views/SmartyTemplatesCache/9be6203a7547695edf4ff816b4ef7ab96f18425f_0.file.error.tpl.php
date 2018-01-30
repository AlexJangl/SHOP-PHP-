<?php
/* Smarty version 3.1.31, created on 2018-01-28 02:17:36
  from "E:\OSPanel\domains\progecktShop\src\Views\SmartyTemplates\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a6d089024e9c5_43344326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9be6203a7547695edf4ff816b4ef7ab96f18425f' => 
    array (
      0 => 'E:\\OSPanel\\domains\\progecktShop\\src\\Views\\SmartyTemplates\\error.tpl',
      1 => 1517095053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6d089024e9c5_43344326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82175a6d089023dc31_85040156', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/main.tpl");
}
/* {block "content"} */
class Block_82175a6d089023dc31_85040156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_82175a6d089023dc31_85040156',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="jumbotron">
    <h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
    <p><a href="/" class="btn btn-primary btn-lg" role="button">Вернуться на главную страницу</a></p>
</div>
<?php
}
}
/* {/block "content"} */
}
