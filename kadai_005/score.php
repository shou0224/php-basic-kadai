<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>php課題</title>
</head>
<body>
  <p>
    <?php
    // 生徒１０人の点数
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;

    // 点数の合計
    $sum = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
    
    // 点数の平均
    $average = $sum / 10;

    // 平均点の出力
    echo "平均点は{$average}です。";
    ?>
  </p>
</body>
</html>