<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題016です</title>
</head>
<body>
<p>
  <?php
  class Food{
    public $name;
    public $price;

    public function __construct(string $name, string $price){
      $this->name = $name;
      $this->price = $price;
    }
    public function show_price(){
      echo $this->price .'円';
    }
    }
    
  $food = new Food('potato',250);
  print_r($food);
  $food->show_price();

  ?>
    </p>
 <p>
  <?php
  Class Animal{
    public $name;
    public $height;
    public $weight;

    public function __construct(string $name, string $height, string $weight){
      $this->name = $name;
      $this ->height = $height;
      $this->weight = $weight;
    }
    public function show_height(){
      echo $this->height . 'cm';
    }
  }

  $animal =new Animal('dog', 60, 5000);
  print_r($animal);

  echo '<br>';
  echo '高さ';
  $animal->show_height();

  ?>
  </p>

</body>
</html>