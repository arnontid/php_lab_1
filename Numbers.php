<!DOCTYPE html>
<html>
<body>

<h3><?php echo "PHP Integers"; ?></h3>
<?php  
$x = 5985;
var_dump(is_int($x));

echo "<br>"; 
$x = 59.85;
var_dump(is_int($x));
?>  


<h3><?php echo "PHP Floats"; ?></h3>
<?php 
$x = 10.365;
var_dump(is_float($x));
?>  

<h3><?php echo "PHP Infinity"; ?></h3>
<?php
$x = 1.9e411;
var_dump($x);
?>  

<h3><?php echo "PHP NaN"; ?></h3>
<?php
$x = acos(8);
var_dump($x);
?>  

<h3><?php echo "PHP Numerical Strings"; ?></h3>
<?php 
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
?>  

<h3><?php echo "PHP Casting Strings and Floats to Integers"; ?></h3>
<?php
// Cast float to int 
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>  

</body>
</html>
</body>
</html>
</body>
</html>