<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    $nums = [15, 4, 18, 23, 10 ];
    
    function sorting($array, $order) {
      if($order) {
        echo '昇順にソートします。<br>';
        asort($array);
      } else {
        echo '降順にソートします。<br>';
        arsort($array);
      }
      foreach($array as $value) {
        echo $value . '<br>';
      }
    }

    sorting($nums, true);
    sorting($nums, false);
    ?>
  </p>
</body>
</html>