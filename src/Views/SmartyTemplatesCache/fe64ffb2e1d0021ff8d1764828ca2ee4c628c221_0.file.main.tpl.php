<?php
/* Smarty version 3.1.31, created on 2018-01-28 19:21:10
  from "E:\OSPanel\domains\progecktShop\src\Views\SmartyTemplates\layout\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a6df876865296_81053938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe64ffb2e1d0021ff8d1764828ca2ee4c628c221' => 
    array (
      0 => 'E:\\OSPanel\\domains\\progecktShop\\src\\Views\\SmartyTemplates\\layout\\main.tpl',
      1 => 1517156469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6df876865296_81053938 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

               <a href="/"> <img  src="/img/logo/logo1.jpg" alt="" class="navbar-brand"> </a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-left" action="/product/search" method="get" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                    </div>
                    <button type="submit" class="btn btn-active">Поиск</button>
                </form>


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/cart/show" class=""><i class="fa fa-shopping-cart fa-lg" aria-hidden="true" style="color: #337AB7"></i>
                            <span style="border: 1px; background-color: #ac2925; color: #ffffff; border-radius: 40% "> <?php echo $_smarty_tpl->tpl_vars['cart_count']->value;?>
 </span></a> </li>
                    <?php if ((isset($_SESSION['name']))) {?>
                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['name'];?>
 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Профиль</a></li>
                            <?php if (($_smarty_tpl->tpl_vars['user']->value)) {?>
                                <li><a href="/admin/products">Панель администратора</a></li>
                            <?php }?>
                            <li class="divider"></li>
                            <li><a href="/users/logout">Выйти</a></li>
                        </ul>
                    </li>
                    <?php } else { ?>

                    <li><a href="/users/registration">Регистрация</a></li>
                    <li><a href="/users/login">Войти</a></li>
                    <?php }?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185465a6df876859a98_15858007', "content");
?>


</div>


<div id="footer" >
    <div class="container glyphicon-folder-open">
        <p class="text-muted">Place sticky footer content here.</p>
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
class Block_185465a6df876859a98_15858007 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_185465a6df876859a98_15858007',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
