{extends file="Admin/layout/main.tpl"}
{block name="content"}
<div class="table-responsive">
    <h1>Создание пользователя</h1>
    <br>
    <form action="/admin/save_user" method="post">
        <input type="text" name="name" placeholder="имя" class="form-control">
        <br>
        <textarea type="email" name="email" placeholder="email"  class="form-control"></textarea>
        <br>
        <input type="text" name="password" placeholder="пароль" class="form-control">
        <br>

        <br>
        <input type="submit" class="btn btn-success" value="Добавить">
    </form>
</div>
{/block}