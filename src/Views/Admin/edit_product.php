<div class="table-responsive">
    <h1>Редактирование продукта</h1>
    <br>
<form enctype="multipart/form-data" action="/admin/update_product" method="post">
    <input type="hidden" name="id" value="<?=$data['id']?>" class="form-control">
    <input type="text" name="name" placeholder="имя" value="<?=$data['name']?>" class="form-control">
    <br>
    <textarea type="text" name="description" placeholder="описание"  class="form-control"><?=$data['description']?></textarea>
    <br>
    <input type="number" name="price" placeholder="цена" value="<?=$data['price']?>" class="form-control">
    <br>
    <input type="file" name="img">
    <img src="/img/<?= $data['img']?>" style=" width: 200px" alt="">
    <br>
    <br>
    <input type="submit" class="btn btn-success" value="Обновить">
</form>
</div>