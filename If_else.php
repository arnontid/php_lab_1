<!DOCTYPE html>
<html>
<body>

<h3><?php echo "PHP - The if Statement"; ?></h3>
<?php
$t = date("H");

if ($t = "20") {
  echo "Have a good day!";
} 
?>

<h3><?php echo "PHP - The if...else Statement"; ?></h3>
<?php
$t = date("H");

if ($t = "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>


<h3><?php echo "PHP - The if...elseif...else Statement"; ?></h3>
<?php
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t = "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

</body>
</html>


</body>
</html>


</body>
</html>