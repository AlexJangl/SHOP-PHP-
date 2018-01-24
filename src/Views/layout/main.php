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
                    <li><a href="/cart/show" class=""><i class="fa fa-shopping-cart fa-lg" aria-hidden="true" style="color: #337AB7"></i><span style="border: 1px; background-color: #ac2925; color: #ffffff; border-radius: 40% "><?=" ".$data['cart_count']?><?=" "?></span></a> </li>
                    <?php if (isset($_SESSION['name'])){?>
                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $_SESSION ['name']?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Профиль</a></li>
                            <?php
                            require_once '/../../Models/UsersModel.php';
                            $users= new UsersModel();
                            if ($users->is_admin($_SESSION['name'])) {?>
                                <li><a href="/admin/products">Панель администратора</a></li>
                            <?php } ?>
                            <li class="divider"></li>
                            <li><a href="/users/logout">Выйти</a></li>
                        </ul>
                    </li>
                    <?php } else { ?>
                    <li><a href="/users/registration">Регистрация</a></li>
                    <li><a href="/users/login">Войти</a></li>
                    <?php } ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
<?php require_once '/../'.$name.'.php';?>


</div>


<div id="footer" >
    <div class="container glyphicon-folder-open">
        <p class="text-muted">Place sticky footer content here.</p>
    </div>
</div>


</body>
<script
        src="https://code.jquery.com/jquery-3.2.1.slim.js"
        integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg="
        crossorigin="anonymous">

</script>


<script src="/js/bootstrap.js">
</script>
</html>


