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
function addPost($pdo){
$post_name = trim(filter_input(INPUT_POST, 'title'));
$post_content = trim(filter_input(INPUT_POST, 'content'));
if($post_name === ''){
  return;
} 
if($post_content === ''){
  return;
} 

$stmt = $pdo->prepare("INSERT INTO posts (title, content) VALUES (:title, :content)");
$stmt->bindValue('title' ,$post_name, PDO::PARAM_STR );
$stmt->bindValue('content' ,$post_content, PDO::PARAM_STR );
$stmt->execute();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  addPost($pdo);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>投稿が完了しました。</h1>
  <p><a href="test.php">投稿一覧に戻る</a></p>
</body>
</html>