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
function getPosts($pdo)
{
  $stmt = $pdo->query("SELECT * FROM posts");
  $posts = $stmt-> fetchALL();
  return $posts;
}
$posts = getPosts($pdo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<h1>掲示板</h1>
<h2>新規投稿</h2>
  <form action="result.php" method = "post" action="result.php">
  <p><label>name:<input type="text" name="title"></label></p>
  <p>投稿内容:</p>
  <p><textarea name="content"></textarea></p>
  <button type="submit">投稿</button>
  </form>
<?php foreach ($posts as $post): ?>
 <p>No:<?= h($post->id);?></p>
 <p>名前:<?= h($post->title);?></p>
 <p>投稿内容:<?= h($post->content); ?></p>
 <form action="delete.php" method="post">
   <input type="hidden" name="id" value="<?= h($post->id);?>">
   <button type="submmit">削除</button>
  </form>
 <?php endforeach ?>

</body>
</html>
