<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form method = "post">
  <p><label>FizzNum: <input type="text" name="fizznum"></label></p>
  <p><label>BuzzNum:<input type="text" name="buzznum"></label></p>
  <button type="submit">実行</button>
 <form method ="post">
  </form>
  <?php 
  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
   $fizz = $_POST["fizznum"];
   $buzz = $_POST["buzznum"];
  if(!ctype_digit($fizz) || !ctype_digit($buzz) ){
    ?><p><?php echo "整数値を入力してください" . PHP_EOL; ?></p><?php
    return;
     }
  for($i = 1; $i < 100; $i++){
   if($i%$fizz === 0 && $i%$buzz === 0){
  ?><p><?php echo "FizzBuzz $i" . PHP_EOL;?></p><?php
  }elseif($i%$fizz === 0){
  ?><p><?php echo "Fizz $i" . PHP_EOL;?></p><?php
  }elseif($i%$buzz === 0){
  ?><p><?php echo "Buzz $i" . PHP_EOL;?></p><?php
    }
  }
}
</body>
</html>