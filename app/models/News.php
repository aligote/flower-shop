<?php
class News
{
  public static function addNews($title, $text, $date) {
    $db = ConnectDb::getConnection();
    $image = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmpName, 'web/images/' . $image);
    $sql = "INSERT INTO products(title, image, text, datetime) VALUES (:title, :image, :text, :date)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':title', $title);
    $statement->bindParam(':image', $image);
    $statement->bindParam(':text', $text);
    $statement->bindParam(':date', $date);
    $statement->execute();
    header('Location: /add-news');
  }
}