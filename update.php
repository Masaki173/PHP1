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
function h($str){
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
function updatePost($pdo){
  $new_name = trim(filter_input(INPUT_POST, 'new_title'));
  $new_content = trim(filter_input(INPUT_POST, 'new_content'));
if($new_name === ''){
  return;
} 
if($new_content === ''){
  return;
} 
$stmt = $pdo->prepare("UPDATE posts SET title = :new_title, content = :new_content");


$stmt->bindValue('new_title' ,$new_name, PDO::PARAM_STR );
$stmt->bindValue('new_content' ,$new_content, PDO::PARAM_STR );
$stmt->execute();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  updatePost($pdo);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<h1>投稿の編集が完了しました</h1>
<p><a href="test.php">投稿一覧に戻る</a></p>
</body>
</html>