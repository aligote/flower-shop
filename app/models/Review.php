<?php
class Review
{

  const SHOW_BY_DEFAULT = 12;

  public static function getLatestReview($count = self::SHOW_BY_DEFAULT) {
    $count = intval($count);
    $db = ConnectDb::getConnection();
    $result = $db->query("SELECT id, name, text FROM reviews 
                                    ORDER BY id DESC LIMIT $count");
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function getReview($id) {
    $db = ConnectDb::getConnection();
    $result = $db->query('SELECT * FROM reviews WHERE id=' . $id);
    return $result->fetch(PDO::FETCH_ASSOC);
  }

  public static function getReviews() {
    $db = ConnectDb::getConnection();
    $result = $db->query('SELECT * FROM reviews ORDER BY id DESC');
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function addReview($name, $text) {
    $db = ConnectDb::getConnection();
    $sql = "INSERT INTO reviews(name, text) VALUES (:name, :text)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':name', $name);
    $statement->bindParam(':text', $text);
    $statement->execute();
    header('Location: /reviews');
  }

  public static function deleteReview($id) {
    $db = ConnectDb::getConnection();
    $statement = $db->query('DELETE FROM reviews WHERE id=' . $id);
    $statement->execute();
    header('Location: /reviews');
  }
}