<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php 
  $questions = [
   "問題" => "日本の首都は？"
   ];
   foreach($questions as $key => $question) {
     ?><h1><?php echo $key.' '.$question . PHP_EOL; ?></h1><?php
   }
  $answers = [
  "回答1" => "大阪",
  "回答2" => "北海道",
  "回答3" => "箱根",
  "回答4" => "東京",
  ]; 
  foreach($answers as $key => $answer) {
 ?><p><?php echo $key. ' '.$answer . PHP_EOL;?></p><?php
  }
  ?>

</body>
</html>