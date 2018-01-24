<div class="table-responsive">
    <h1>Редактирование продукта</h1>
    <br>
    <form action="/admin/update_user" method="post">
        <input type="hidden" name="id" value="<?=$data['id']?>" class="form-control">
        <input type="text" name="name" placeholder="имя" value="<?=$data['name']?>" class="form-control">
        <br>
        <input type="email" name="email" placeholder="email"  class="form-control" value="<?=$data['email']?>">
        <br>
        <input type="text" name="password" placeholder="пароль" value="<?=$data['password']?>" class="form-control">
        <br>
        <p><input type="radio" name="role" placeholder="роль" value="admin" <?php if ($data['role']==='admin') {?> checked <?php } ?> >Администратор</p>
        <p><input type="radio" name="role" placeholder="роль" value="user" <?php if ($data['role']==='user') {?> checked <?php } ?>>Пользоватаель</p>
        <br>

        <br>
        <input type="submit" class="btn btn-success" value="Обновить">
    </form>
</div>
