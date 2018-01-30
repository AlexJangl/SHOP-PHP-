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
        {block name="content"}
        {/block}
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
