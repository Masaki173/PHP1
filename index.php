<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
 <form method ="post">
  <select name="you">
  <option value="自分: グー">グー</option>
  <option value="自分: チョキ">チョキ</option>
  <option value="自分: パー">パー</option>
  </select>
  <button>じゃんけん！</button>
  </form>
  <?php 
  $you = filter_input(INPUT_POST, "you");
  ?><p><?php echo "$you" . PHP_EOL; ?></p><?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
 $n = mt_rand(1, 3);
    switch($n) {
      case 1:
      echo '相手: グー';
      $game = ($you === '自分: グー' ? 'あいこ！' : ($you === '自分: パー' ? 'あなたの勝利です！' : 'あなたの敗北です。。。'));
      ?><p><?php echo "$game" . PHP_EOL; ?></p><?php
      break;
      case 2:
      echo '相手: チョキ';
      $game = ($you === '自分: チョキ' ? 'あいこ！' : ($you === '自分: グー' ? 'あなたの勝利です！' : 'あなたの敗北です。。。'));
      ?><p><?php echo "$game" . PHP_EOL; ?></p><?php
      break;
      case 3:
      echo '相手: パー';
      $game = ($you === '自分: パー' ? 'あいこ！' : ($you === '自分: チョキ' ? 'あなたの勝利です！' : 'あなたの敗北です。。。'));
      ?><p><?php echo "$game" . PHP_EOL; ?></p><?php
      break;
   } 
  }
  ?>
</body>
</html>