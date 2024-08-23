<!-- decodes the following JSON string. -->

<?php
$jsonstring = '{"name":"Maiz", "age":30, "city":"MODASA"}';

$array = json_decode($jsonstring, true); 
echo "<pre>";
print_r($array);
?>