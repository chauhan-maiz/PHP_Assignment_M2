<!-- Get random values from array -->
<?php
function RandomValue($arr) {
    $Key = array_rand($arr); 
    return $arr[$Key]; 
}
$myArray = [1, 2, 3, 4, 5];
$randomValue = RandomValue($myArray);
echo "Random value from array : $randomValue";
?>
