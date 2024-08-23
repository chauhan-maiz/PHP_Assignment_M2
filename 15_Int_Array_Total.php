<?php
$no =[1, 2, 3, 4, 5];
$total=0;
$count = count($no);
for($i=0; $i<$count; $i++){
    $total += $no[$i];
}

echo "Total is: $total";
?>