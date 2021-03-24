<?php

define('DSN', 'mysql:host=127.0.0.1;dbname=posts;charset=utf8mb4');
define('DB_USER', 'root');
define('DB_PASS', 'masaina0812');
try{
  $pdo = new PDO(
    DSN,
    DB_USER,
    DB_PASS,
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
      PDO::ATTR_EMULATE_PREPARES => false,
    ]
  );
} catch (PDOException $e){
  echo $e->getMessage();
  exit;
}

function deletePost($pdo){
  $id = filter_input(INPUT_POST, 'id');
  if (empty($id)){
    return;
  }
  $stmt = $pdo->prepare("DELETE FROM posts WHERE id = :id");
  $stmt->bindValue('id', $id, PDO::PARAM_INT);
  $stmt->execute();
}
  deletePost($pdo);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>投稿の削除が完了しました</h1>
  <p><a href="test.php">投稿一覧に戻る</a></p>
</body>
</html>