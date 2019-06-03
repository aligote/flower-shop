<?php
class Product
{
  const SHOW_BY_DEFAULT = 10;

  public static function getLatestProducts($count = self::SHOW_BY_DEFAULT) {
    $count = intval($count);
    $db = ConnectDb::getConnection();
    $productsList = array();
    $result = $db->query("SELECT id, name, price, image FROM products 
                                    ORDER BY id DESC LIMIT $count");
    $i = 0;
    while ($row = $result->fetch()) {
      $productsList[$i]['id'] = $row['id'];
      $productsList[$i]['name'] = $row['name'];
      $productsList[$i]['price'] = $row['price'];
      $productsList[$i]['image'] = $row['image'];
    }
    return $productsList;
  }
}