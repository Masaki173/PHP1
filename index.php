<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php echo "日本の首都は？";?>

<form method="post">
<input type="text" name="answer"></input>
</form>


<?php
$answer = filter_input(INPUT_POST, 'answer');
if($answer==="東京")｛
echo "正解" .PHP_EOL;
}else{
  echo "不正解" .PHP_EOL;
}
?>
</body>
</html>


