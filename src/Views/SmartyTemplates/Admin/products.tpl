{extends file="Admin/layout/main.tpl"}
{block name="content"}
<h2 class="sub-header">Товары</h2>
<div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <a href="/admin/create_product" type="button" class="btn btn-success">Добавить</a>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Цена</th>

                    </tr>
                    </thead>
                    <tbody>

                    {foreach from=$products item=product}
                        <tr>
                            <td>{$product.id}</td>
                            <td>{$product.name}</td>
                            <td>{$product.description}</td>
                            <td>{$product.price}</td>
                            <td><div class="btn-group">
                <a href="/admin/edit_product?id={$product.id}" type="button" class="btn btn-primary">Редактир</a>
                <a href="/admin/delete_product?id={$product.id}" type="button" class="btn btn-danger">Удалить</a>
            </div>
        </td>
    </tr>
                    {/foreach}

</tbody>
</table>
</div>
{/block}
