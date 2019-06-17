<?php
class Product
{
  const SHOW_BY_DEFAULT = 12;

  public static function getLatestProducts($count = self::SHOW_BY_DEFAULT) {
    $count = intval($count);
    $db = ConnectDb::getConnection();
    $result = $db->query("SELECT id, title, price, image FROM products 
                                    ORDER BY id DESC LIMIT $count");
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function getProduct($id) {
    $db = ConnectDb::getConnection();
    $result = $db->query('SELECT * FROM products WHERE id=' . $id);
    return $result->fetch(PDO::FETCH_ASSOC);
  }

  public static function getProducts() {
    $db = ConnectDb::getConnection();
    $result = $db->query('SELECT * FROM products ORDER BY id DESC');
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function addProduct($title, $code, $price) {
    $db = ConnectDb::getConnection();
    $image = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmpName, 'web/images/' . $image);
    $sql = "INSERT INTO products(image, title, code, price) VALUES (:image, :title, :code, :price)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':image', $image);
    $statement->bindParam(':title', $title);
    $statement->bindParam(':code', $code);
    $statement->bindParam(':price', $price);
    $statement->execute();
    header('Location: /products');
  }

  public static function viewEditProduct() {

  }

  public static function editProduct($title, $code, $price) {
    $db = ConnectDb::getConnection();
    $image = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmpName, 'web/images/' . $image);
    $sql = "UPDATE products SET 'image' = 'image', 'title' = 'title', 'code' = 'code', 'price' = 'price'";
    $statement = $db->prepare($sql);
    $statement->bindParam(':image', $image);
    $statement->bindParam(':title', $title);
    $statement->bindParam(':code', $code);
    $statement->bindParam(':price', $price);
    $statement->execute();
    header('Location: /products');
  }

  public static function deleteProduct($id) {
    $db = ConnectDb::getConnection();
    $statement = $db->query('DELETE FROM products WHERE id=' . $id);
    $statement->execute();
    header('Location: /products');
  }
}