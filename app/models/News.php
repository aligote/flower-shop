<?php
class News
{

  const SHOW_BY_DEFAULT = 12;

  public static function getLatestNews($count = self::SHOW_BY_DEFAULT) {
    $count = intval($count);
    $db = ConnectDb::getConnection();
    $result = $db->query("SELECT id, title, text FROM news 
                                    ORDER BY id DESC LIMIT $count");
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function getOneNews($id) {
    $db = ConnectDb::getConnection();
    $result = $db->query('SELECT * FROM news WHERE id=' . $id);
    return $result->fetch(PDO::FETCH_ASSOC);
  }

  public static function getNews() {
    $db = ConnectDb::getConnection();
    $result = $db->query('SELECT * FROM news ORDER BY id DESC');
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function addNews($title, $text, $date) {
    $db = ConnectDb::getConnection();
    $image = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmpName, 'web/images/' . $image);
    $sql = "INSERT INTO news(title, image, text, date) VALUES (:title, :image, :text, :date)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':title', $title);
    $statement->bindParam(':image', $image);
    $statement->bindParam(':text', $text);
    $statement->bindParam(':date', $date);
    $statement->execute();
    header('Location: /add-news');
  }
}