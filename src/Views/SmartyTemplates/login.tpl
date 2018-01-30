{extends file="layout/main.tpl"}
{block name="content"}
<form class="form-signin" method="post" action="/users/login" role="form">
    <h2 class="form-signin-heading">Вход</h2>
    <input type="email" name="email" class="form-control" placeholder="Email address" required>
    <br>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Вход</button>
</form>
{/block}