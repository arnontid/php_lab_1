<!DOCTYPE html>
<html>
<body>

<h3><?php echo "PHP Arithmetic Operators"; ?></h3>
<?php
$x = 10;  
$y = 6;

echo $x + $y;
?>  
<?php echo "<br>" ?>

<?php
$x = 10;  
$y = 6;

echo $x - $y;
?>  
<?php echo "<br>" ?>

<?php
$x = 10;  
$y = 6;

echo $x * $y;
?>  
<?php echo "<br>" ?>

<?php
$x = 10;  
$y = 6;

echo $x / $y;
?>  
<?php
$x = 10;  
$y = 6;

echo $x % $y;
?>  
<?php echo "<br>" ?>

<?php
$x = 10;  
$y = 3;

echo $x ** $y;
?>  
<?php echo "<br>" ?>


<h3><?php echo "PHP Assignment Operators"; ?></h3>
<?php
$x = 10;  
echo $x;
?>  
<?php echo "<br>" ?>

<?php
$x = 20;  
$x += 100;

echo $x;
?>  
<?php echo "<br>" ?>

<?php
$x = 50;
$x -= 30;

echo $x;
?>  
<?php echo "<br>" ?>

<?php
$x = 10;  
$y = 6;

echo $x * $y;
?>  
<?php echo "<br>" ?>

<?php
$x = 10;
$x /= 5;

echo $x;
?>  
<?php echo "<br>" ?>

<?php
$x = 15;
$x %= 4;

echo $x;
?>  
<?php echo "<br>" ?>

<h3><?php echo "PHP Comparison Operators"; ?></h3>
<?php
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
?>  
<?php echo "<br>" ?>

<?php
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal
?>  
<?php echo "<br>" ?>

<?php
$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal
?>  
<?php echo "<br>" ?>

<?php
$x = 100;  
$y = "100";

var_dump($x <> $y); // returns false because values are equal
?>  
<?php echo "<br>" ?>

<?php
$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal
?>  
<?php echo "<br>" ?>

<?php
$x = 100;
$y = 50;

var_dump($x > $y); // returns true because $x is greater than $y
?>  
<?php echo "<br>" ?>

<?php
$x = 10;
$y = 50;

var_dump($x < $y); // returns true because $x is less than $y
?>  
<?php echo "<br>" ?>

<?php
$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y
?>  
<?php echo "<br>" ?>

<?php
$x = 50;
$y = 50;

var_dump($x <= $y); // returns true because $x is less than or equal to $y
?>  
<?php echo "<br>" ?>
<?php echo "<br>" ?>

<?php
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
?>  
<?php echo "<br>" ?>

<?php echo "<br>" ?>

<h3><?php echo "PHP Increment / Decrement Operators"; ?></h3>
<?php
$x = 10;  
echo ++$x;
?>  
<?php echo "<br>" ?>

<?php
$x = 10;  
echo $x++;
?>  

<?php echo "<br>" ?>

<?php
$x = 10;  
echo --$x;
?>  

<?php echo "<br>" ?>

<?php
$x = 10;  
echo $x--;
?>  
<?php echo "<br>" ?>

<h3><?php echo "PHP Logical Operators"; ?></h3>
<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
?>  
<?php echo "<br>" ?>

<?php
$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
?>  
<?php echo "<br>" ?>

<?php
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
?>  
<?php echo "<br>" ?>

<?php
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
?>  
<?php echo "<br>" ?>

<?php
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
?>  
<?php echo "<br>" ?>

<?php
$x = 100;  

if ($x !== 90) {
    echo "Hello world!";
}
?>  

<?php echo "<br>" ?>

<h3><?php echo "PHP String Operators"; ?></h3>
<?php
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
?>  
<?php echo "<br>" ?>

<?php
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;
?>  

<?php echo "<br>" ?>

<h3><?php echo "PHP Array Operators"; ?></h3>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
?>  
<?php echo "<br>" ?>

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y);
?>  
<?php echo "<br>" ?>

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);
?>  
<?php echo "<br>" ?>

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x != $y);
?>  
<?php echo "<br>" ?>

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x <> $y);
?>  
<?php echo "<br>" ?>

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x !== $y);
?>  

<?php echo "<br>" ?>

<h3><?php echo "PHP Conditional Assignment Operators"; ?></h3>
<?php
   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
?>  
<?php echo "<br>" ?>
<?php echo "<br>" ?>

<?php
   // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
?>  
<?php echo "<br>" ?>

</body>
</html>


</body>
</html>


</body>
</html>