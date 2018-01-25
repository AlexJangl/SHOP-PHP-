<h2 class="sub-header">Пользователи</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <a href="/admin/create_user" type="button" class="btn btn-success">Добавить</a>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Почта</th>
            <th>Пароль</th>
            <th>Роль</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($data['products'] as $user){
            /*if (!empty($user))*/{?>
            <tr>
                <td><?= $user['id']?></td>
                <td><?= $user['name']?></td>
                <td><?= $user['email']?></td>
                <td><?= $user['password']?></td>
                <td><?= $user['role']?></td>
                <td><div class="btn-group">
                        <a href="/admin/edit_user?id=<?=$user['id']?>" type="button" class="btn btn-primary">Редактир</a>
                        <a href="/admin/delete_user?id=<?=$user['id']?>" type="button" class="btn btn-danger">Удалить</a>
                    </div>
                </td>
            </tr>
        <?php }} ?>

        </tbody>
    </table>
</div>
