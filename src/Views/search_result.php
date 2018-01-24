<h1>Результат по запросу: <?= $data['search']?></h1>
<div class="row">
    <?php
    foreach ($data['products'] as $product){?>
        <div class="col-sm-6 col-md-3" >
            <div class="thumbnail sizeBlock">
                <img id="sizeImg" src="/img/<?=$product['img']?>" >
                <div class="caption" >
                    <h3><?=$product['name']?></h3>
                    <p style="text-overflow: ellipsis; white-space:nowrap; overflow: hidden;"><?=$product['description']?></p>
                    <b class="text-right"><?=$product['price']?> грн.</b>
                    <p><a href="/product/show?id=<?=$product[id]?>" class="btn btn-primary" role="button">Подробнее</a> <a href="#" class="btn btn-default" role="button">Купить</a></p>
                </div>
            </div>
        </div>
    <?php }?>
</div>