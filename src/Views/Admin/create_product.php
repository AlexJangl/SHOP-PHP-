<div class="table-responsive">
    <h1>Создание продукта</h1>
    <br>
    <form enctype="multipart/form-data" action="/admin/save_product" method="post">
        <input type="text" name="name" placeholder="имя" class="form-control">
        <br>
        <textarea type="text" name="description" placeholder="описание"  class="form-control"></textarea>
        <br>
        <input type="number" name="price" placeholder="цена" class="form-control">
        <br>
        <input type="file" name="img">
        <br>
        <input type="submit" class="btn btn-success" value="Добавить">
    </form>
</div>