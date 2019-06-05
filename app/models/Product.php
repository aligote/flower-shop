<?php
class Product
{
  const SHOW_BY_DEFAULT = 10;

  public static function getLatestProducts($count = self::SHOW_BY_DEFAULT) {
    $count = intval($count);
    $db = ConnectDb::getConnection();
    $result = $db->query("SELECT id, name, price, image FROM products 
                                    ORDER BY id DESC LIMIT $count");
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function getProduct($id) {
    $db = ConnectDb::getConnection();
    $result = $db->query('SELECT * FROM products WHERE id=' . $id);
    return $result->fetch(PDO::FETCH_ASSOC);
  }
}