<?php
namespace App\Models;
use App\Models\Model;
//require_once 'Model.php';

class ProductModel extends Model
{
    public function getAllProducts(){

        $stmt = $this->pdo->prepare('SELECT * FROM products');
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getProduct($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM products WHERE id=? LIMIT 1');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    public function updateProduct($id, $name, $desc, $price, $img=null){
        if ($img===null){
            $stmt=$this->pdo->prepare('UPDATE products SET name=?, description=?, price=? WHERE id=? ');
            $stmt->execute([$name, $desc, $price, $id]);
        }
        else {
            $stmt = $this->pdo->prepare('UPDATE products SET name=?, description=?, price=?, img=? WHERE id=? ');
            $stmt->execute([$name, $desc, $price, $img, $id]);
        }
    }

    public function deleteProduct($id){
        $smtm=$this->pdo->prepare('DELETE FROM products WHERE id=?');
        $smtm->execute([$id]);

    }
    public function saveProduct($name, $desc, $price, $img=null){
        if ($img=null) {
            $stmt = $this->pdo->prepare('INSERT INTO products (name, description, price) VALUES (?,?,?)');
            $stmt->execute([$name, $desc, $price]);
        }
        else{
            $stmt = $this->pdo->prepare('INSERT INTO products (name, description, price, img) VALUES (?,?,?,?)');
            $stmt->execute([$name, $desc, $price, $img]);
        }
    }

    public function searchProducts ($search){
        $search='%'.$search.'%';
        $stmt = $this->pdo->prepare('SELECT * FROM products WHERE name LIKE ?');
        $stmt->execute([$search]);
        return $stmt->fetchAll();
    }

}
