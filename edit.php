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
  $get_id = $_GET["id"];
  $sql = "SELECT * FROM posts WHERE id = $get_id";
  $stmt = $pdo->query($sql);
  $stmt->execute();

?>  
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Document</title>
</head>
<body>
<h1>編集ページ</h1>
<?php foreach($stmt as $loop):?>
 <form action="update.php" method ="post">
  <input type="hidden" name="id"value="<?= $loop->id;?>">
  <p><label>name:<input type="text" name="new_title" value="<?= $loop->title;?>"></label></p>
  <p>投稿内容:</p>
  <p><textarea name="new_content"><?= $loop->content;?></textarea></p>
  <button type="submit">更新</button>
  <button type="button" onclick="history.back()">戻る</button>
 </form>
<?php endforeach ?>
</body>
</html>