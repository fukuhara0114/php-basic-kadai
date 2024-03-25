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
      class Food{
        private $name;
        private $price;

        public function __construct(string $name, int $price){
          $this->name = $name;
          $this->price = $price;
        }

        public function show_price(){
          echo $this->price.'円<br>';
        }
      }

      class Animal{
        private $name;
        private $weight;
        private $height;

        public function __construct(string $name, int $weight, int $height){
          $this->name = $name;
          $this->weight = $weight;  
          $this->height = $height;  
          
          }

          public function show_height(){
            echo $this->height.'Kg<br>';
          }
      }


      $food = new Food('たまねぎ', 200);

      $animal = new Animal(180,300);

      print_r($food);
      echo '<br>';
      print_r($animal);
      echo '<br>';
      $food->show_price();
      $animal->show_height();

    ?>
  </p>
  
</body>
</html>
