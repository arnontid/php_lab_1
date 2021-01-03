<!DOCTYPE html>
<html>
<body>

<h3><?php echo "Ex1_Create a PHP Constant"; ?></h3>
<?php
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?> 


<h3><?php echo "Ex2_Create a PHP Constant"; ?></h3>
<!DOCTYPE html>
<html>
<body>

<?php
// case-insensitive constant name
define("GREETING1", "Welcome to W3Schools.com!", true);
echo GREETING1;
?> 


<h3><?php echo "PHP Constant Arrays"; ?></h3>
<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>


<h3><?php echo "Constants are Global"; ?></h3>
<?php
define("GREETING5", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING5;
}
 
myTest();
?>


</body>
</html>


</body>
</html>


</body>
</html>