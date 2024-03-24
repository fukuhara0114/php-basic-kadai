<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
      function mySort($arrays, $order){

        if($order === true){
          echo"昇順にソートします。<br>";
          sort($arrays);
        }
        else{
          echo"降順にソートします。<br>";
          rsort($arrays);
        }

        foreach($arrays as $array){
          echo $array."<br>";

        }
      };

      $nums = [15, 4, 18, 23, 10 ];

      mySort($nums, true);
      mySort($nums, false);

    ?>
  </p>
</body>
</html>