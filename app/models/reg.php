<?php
require '../connect_db.php';
$sql = 'INSERT INTO users(login, password) VALUES(:login, :password)';
$query = $pdo->prepare($sql);
$query->execute($_POST);

header('Location: /');