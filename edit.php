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
function editPost($pdo){
  $id = filter_input(INPUT_GET, 'id');
  if (empty($id)){
    return;
  }
  $stmt = $pdo->prepare("SELECT title, content FROM posts WHERE id = :id");
  $stmt->bindValue('id', $id, PDO::PARAM_INT);
  $existing_post = $stmt->execute();
}
  $existing_post = editPost($pdo);
?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<h1>編集ページ</h1>
<form action="update.php" method ="post">
  <p><label>name:<input type="text" name="new_title" value="<?= $existing_post->title; ?>"></label></p>
  <p>投稿内容:</p>
  <p><textarea name="new_content" value="content"><?= $existing_post->content ; ?></textarea></p>
  <input type="hidden" name="id" >
  <button type="submit">更新</button>
  </form>
</body>
</html>