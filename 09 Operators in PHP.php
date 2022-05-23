<?php
 
echo "Operators in PHP <br>";

echo "1. Arithmetic Operators <br>";

echo "2. Assignment Operators <br>";

echo "3. Comparison Operators  <br>";

echo "4. Logical Operators <br>";

$a = 45;
$b = 8;

// 1. Arithmetic Operators
echo "<br><br>1. Arithmetic Operators <br>";
echo "For a + b, the result is ". ($a + $b) . "<br>";
echo "For a - b, the result is ". ($a - $b) . "<br>";
echo "For a * b, the result is ". ($a * $b) . "<br>";
echo "For a / b, the result is ". ($a / $b) . "<br>";
echo "For a % b, the result is ". ($a % $b) . "<br>";
echo "For a ** b, the result is ". ($a ** $b) . "<br>";
 
// 2. Assignment Operators
echo "<br>2. Assignment Operators <br>";
$x = $a;
echo "For x, the value is ". $x . "<br>";

$a += 6;
echo "For a, the value is ". $a . "<br>";

$a -= 6;
echo "For a, the value is ". $a . "<br>";

$a *= 6;
echo "For a, the value is ". $a . "<br>";

$a /= 5;
echo "For a, the value is ". $a . "<br>";

$a %= 5; // $a = $a % 5
echo "For a, the value is ". $a . "<br>";


// 3. Comparison Operators 
$x = 78;
$y = 78;
echo "<br>3. Comparison Operators";
echo "<br>For x > y, the result is ";
echo var_dump($x > $y);

echo "<br>For x > y, the result is ";
echo var_dump($x >= $y);

echo "<br>For x < y, the result is ";
echo var_dump($x < $y);

echo "<br>For x < y, the result is ";
echo var_dump($x <= $y);

echo "<br>For x <> y, the result is "; 
echo var_dump($x <> $y);
echo "<br>";


// 4. Logical Operators

$m = true;
$n = true;
echo "<br>4. Logical Operators <br>";
echo "For m and n, the result is "; 
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is "; 
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is "; 
echo var_dump($m or $n);
echo "<br>";

echo "For m || n, the result is "; 
echo var_dump($m || $n);
echo "<br>";

echo "For !m , the result is "; 
echo var_dump(!$m);
echo "<br>";



?>
