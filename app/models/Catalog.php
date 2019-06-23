<?php
class Catalog {
  public static function getCategoryProducts($category) {
    $db = ConnectDb::getConnection();
    $result = $db->query("SELECT * FROM products WHERE category_id = $category");
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
}