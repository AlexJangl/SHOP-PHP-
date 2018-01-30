{extends file="Admin/layout/main.tpl"}
{block name="content"}
<div class="table-responsive">
    <h1>Редактирование продукта</h1>
    <br>
    <form action="/admin/update_user" method="post">
        <input type="hidden" name="id" value="{$user.id}" class="form-control">
        <input type="text" name="name" placeholder="имя" value="{$user.name}" class="form-control">
        <br>
        <input type="email" name="email" placeholder="email"  class="form-control" value="{$user.email}">
        <br>
        <input type="text" name="password" placeholder="пароль" value="{$user.password}" class="form-control">
        <br>
        <p><input type="radio" name="role" placeholder="роль" value="admin" {if ($user.role==='admin')} checked {/if} >Администратор</p>
        <p><input type="radio" name="role" placeholder="роль" value="user" {if ($user.role==='user')} checked {/if}>Пользоватаель</p>
        <br>

        <br>
        <input type="submit" class="btn btn-success" value="Обновить">
    </form>
</div>
{/block}
