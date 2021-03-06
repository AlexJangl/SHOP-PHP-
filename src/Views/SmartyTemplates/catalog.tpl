{extends file='layout/main.tpl'}
{block name="content"}
<div class="row">

{foreach from=$products item=product}

    <div class="col-sm-6 col-md-3" >
        <div class="thumbnail sizeBlock">
            <img id="sizeImg" src="/img/{$product.img}" >
            <div class="caption" >
                <h3>{$product.name}</h3>
                <p style="text-overflow: ellipsis; white-space:nowrap; overflow: hidden;">{$product.description}</p>
                <b class="text-right">{$product.price} грн.</b>
                <p><a href="/product/show?id={$product.id}" class="btn btn-primary" role="button">Подробнее</a>
                    <a href="/cart/add?id={$product.id}" class="btn btn-default" role="button">Купить</a></p>
            </div>
        </div>
    </div>
{/foreach}
</div>

{/block}