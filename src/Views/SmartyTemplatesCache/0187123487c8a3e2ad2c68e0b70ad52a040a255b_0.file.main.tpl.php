<?php
/* Smarty version 3.1.31, created on 2018-01-30 22:27:11
  from "E:\OSPanel\domains\progecktShop\src\Views\SmartyTemplates\Admin\layout\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a70c70fe30c23_27812174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0187123487c8a3e2ad2c68e0b70ad52a040a255b' => 
    array (
      0 => 'E:\\OSPanel\\domains\\progecktShop\\src\\Views\\SmartyTemplates\\Admin\\layout\\main.tpl',
      1 => 1517340429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a70c70fe30c23_27812174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/css.css">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="/admin/products">Товары</a></li>
                <li><a href="/admin/users">Пользователи</a></li>
                <li><a href="/">На главную</a></li>

            </ul>

        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43835a70c70fe248a8_03039991', "content");
?>

    </div>

</div>




</body>
<?php echo '<script'; ?>

    src="https://code.jquery.com/jquery-3.2.1.slim.js"
    integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg="
    crossorigin="anonymous">

<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="/js/bootstrap.js">
<?php echo '</script'; ?>
>
</html>
<?php }
/* {block "content"} */
class Block_43835a70c70fe248a8_03039991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_43835a70c70fe248a8_03039991',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "content"} */
}
