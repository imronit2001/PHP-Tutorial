<?php

echo "Welcome to associative arrays in php ";
// These are called indexed arrays:
// $arr = array('this', 'that', 'what');
// echo $arr[0];
// echo $arr[1];
// echo $arr[2]; 



// Associative arrays
$favCol = array('shubham' => 'red','rohan'=> 'green',
                    'harry'=> 'brown', 8=>'this' );

                    // echo $favCol['harry'];
                    // echo "<br>";
                    // echo $favCol['rohan'];
                    // echo "<br>";
                    // echo $favCol[8]; 
foreach ($favCol as $key => $value) {
    echo "<br>Favorite color of $key is $value";
}

$simpleMDArr = array(
                    array(0,1,2,3,4,5,6), 
                    array(7,8,9,10,11), 
                    array(10,11,12,123,14)
                    );
echo "<br>".$simpleMDArr[1][2];

$assocMDArr = array(
                    "firstArr"=>array(0,1,2,3,4),
                    "secondArr"=>array(10,11,12,13,14),
                    "thirdArr"=>array(20,21,22,23,24,25)
                    );
echo "<br><h1>".$assocMDArr["firstArr"][2]."</h1><br>";
print_r($assocMDArr);
echo "<br><br>";
var_dump($assocMDArr);

$dualassocarray = array(
    "thirdyear"=>array("dept"=>"BCA","sem"=>"6"),
    "secondyear"=>array("dept"=>"BBA","sem"=>"4"),
    "firstyear"=>array("dept"=>"MCA","sem"=>"1"),
);

echo "<br><h1>".$dualassocarray["firstyear"]["sem"]."</h1><br>";
echo "<br><h1>".$dualassocarray["firstyear"]["dept"]."</h1><br>";

$addDemo = array(0,1,2,3,4);
$addDemo[] = 87;
$addDemo[] = 88;
$addDemo[8] = 89;
$addDemo[] = 90;
// echo $addDemo[7];
print_r($addDemo);
echo "<br>";
array_splice($dualassocarray,$dualassocarray["firstyear"]["sem"]);
print_r($dualassocarray);
echo "<br>";
print_r($addDemo);
array_splice($addDemo,2);
echo "<br>";
print_r($addDemo);
?>
