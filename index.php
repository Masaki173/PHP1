<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<form method="post">
<input type="text" name="result">
<button type="submit">検索</button>
 <?php 
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $fruits = ['apple' , 'orange', 'strawberry'];
  $result = $_POST['result'];
  
  if(in_array($result, $fruits)){
    ?><p><?php echo "${result}は、配列fruitsの中に存在してます。" . PHP_EOL;?></p><?php
  }else{
   ?><p><?php echo "${result}は、配列fruitsの中に存在していません。" . PHP_EOL;?></p><?php
  }
}

  ?>
</body>
</html>