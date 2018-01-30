{extends file='layout/main.tpl'}
{block name="content"}
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="thumbnail">
            <img id="sizeImg1" src="/img/{$product.img}">
            <div class="caption">
                <h3>{$product.name}</h3>
                <p>{$product.description}</p>
                <b class="text-right">{$product.price} грн.</b>
                <p><a href="#" class="btn btn-primary" role="button">Купить</a> </p>
            </div>
        </div>
    </div>
</div>
{/block}