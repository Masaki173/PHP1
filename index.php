<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
 <form method ="post">
  <select name="you">
  <option value="グー">グー</option>
  <option value="チョキ">チョキ</option>
  <option value="パー">パー</option>
  </select>
  <button>じゃんけん！</button>
  </form>
  <?php 
  $you = filter_input(INPUT_POST, "you");
  ?><p><?php echo "自分: $you" . PHP_EOL; ?></p><?php
 
 $n = mt_rand(1, 3);
    switch($n) {
      case 1:
      echo '相手: グー';
      $game = ($you == 'グー' ? 'あいこ！' : ($you == 'パー' ? 'あなたの勝利です！' : 'あなたの敗北です。。。'));
      ?><p><?php echo "$game" . PHP_EOL; ?></p><?php
      break;
      case 2:
      echo '相手: チョキ';
      $game = ($you == 'チョキ' ? 'あいこ！' : ($you == 'グー' ? 'あなたの勝利です！' : 'あなたの敗北です。。。'));
      ?><p><?php echo "$game" . PHP_EOL; ?></p><?php
      break;
      case 3:
      echo '相手: パー';
      $game = ($you == 'パー' ? 'あいこ！' : ($you == 'チョキ' ? 'あなたの勝利です！' : 'あなたの敗北です。。。'));
      ?><p><?php echo "$game" . PHP_EOL; ?></p><?php
      break;
   } 
  ?>
</body>
</html>