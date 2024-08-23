<!-- Remove Duplicate values From Arrar -->
 <?php
 $arr = array(10,22,30,10,50,55,30,32,40,55,12,11,10,22);
 echo "<pre>";
 print_r($arr);
 $arr1 = array_unique($arr);
 echo "<pre>";
 print_r($arr1);
 ?>