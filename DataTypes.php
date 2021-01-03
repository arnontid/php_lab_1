<!DOCTYPE html>
<html>
<body>

<?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
?>
<h3><?php echo "PHP Integer"; ?></h3>
<?php  
$x = 5985;
var_dump($x);
echo "<br>";
?>  
<h3><?php echo "PHP Float"; ?></h3>
<?php  
$x = 10.365;
var_dump($x);
echo "<br>";
?>  
<h3><?php echo "PHP Float"; ?></h3>

<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
?>  
<h3><?php echo "PHP Object"; ?></h3>
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
echo "<br>";
?>
<h3><?php echo "PHP NULL Value"; ?></h3>
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
echo "<br>";
?>
</body>
</html>
</body>
</html>
</body>
</html>