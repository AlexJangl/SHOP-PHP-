{extends file="layout/main.tpl"}
{block name="content"}
<h1>КОРЗИНА</h1>
<table class="table">
    <thead>
    <tr>
        <th>Название</th>
        <th>Цена</th>
        <th>Колличество</th>
        <th>Управление</th>
    </tr>
    </thead>
    <tbody>
    {foreach from=$products item=product}
    <tr>
        <td>{$product.name}</td>
        <td>{$product.price}</td>
        <td>{$product.count}</td>
        <td><a href="/cart/delProductCart?id={$product.key}" class="btn btn-danger">Удалить</a></td>
    </tr>
    {/foreach}
    </tbody>
</table>
<hr>
<div class="text-right">Сумма: {$sum}<br><a href="/cart/deleteCart" class="btn btn-danger">Очистить</a> <a href=""
            {/block}                                                                                            class="btn btn-success">Оформить</a></div>