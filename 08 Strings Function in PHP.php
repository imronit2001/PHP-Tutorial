<?php 

$name = "Harry is a good boy";
echo $name;
echo "<br>";

echo "The length of " . "my string is " . strlen($name);
echo "<br>";
// To count no of words in string
echo str_word_count($name);
echo "<br>";
// To reverse a string
echo strrev($name);
echo "<br>";
// To get position of a element in string
// strpos(stringname,element)
echo strpos($name, "Harry");
echo "<br>";
// To replace a word in string 
// str_replace(findword,replaceword,stringname)
echo str_replace("Harry", "Rohan", $name);
echo "<br>";
// To repeat a string n times
// str_repeat(stringname,n);
echo str_repeat($name, 4);
echo "<br>";
// To trim right spaces in string 
// rtim(string)
echo "<pre>";
echo rtrim("    this is a good boy     ");
echo "<br>";
// To trim left spaces in string 
// ltim(string)
echo ltrim("    this is a good boy     ");
echo "</pre>";

?>
