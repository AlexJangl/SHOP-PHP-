{extends file="Admin/layout/main.tpl"}
{block name="content"}
<div class="table-responsive">
    <h1>Редактирование продукта</h1>
    <br>
<form enctype="multipart/form-data" action="/admin/update_product" method="post">
    <input type="hidden" name="id" value="{$product.id}" class="form-control">
    <input type="text" name="name" placeholder="имя" value="{$product.name}" class="form-control">
    <br>
    <textarea type="text" name="description" placeholder="описание"  class="form-control">{$product.description}</textarea>
    <br>
    <input type="number" name="price" placeholder="цена" value="{$product.price}" class="form-control">
    <br>
    <input type="file" name="img">
    <img src="/img/{$product.img}" style=" width: 200px" alt="">
    <br>
    <br>
    <input type="submit" class="btn btn-success" value="Обновить">
</form>
</div>
{/block}