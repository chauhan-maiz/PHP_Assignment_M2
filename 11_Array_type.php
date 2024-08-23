<!-- declare the array (all type) in PHP? Explain with example
Covert a JSON string to array. -->

<?php
// Index Array
    $food = array('Pizza','Burger','Pasta');

    $mobile = ['oppo','vivo','Iphone','Samsung'];

// Associative Array
    $arr = array(
        'Name'=> 'Maiz';
        'Age'=> 26;
        'Gender'=> 'Male';
    )

    $add = [
        'city'=>'Modasa';
        'state'=>'gujarat';
        'pin'=>'383315';
    ]

// Multidimentional Array
    $con = array(
        array('name'=>'Maiz','Mobile'=>'8447320585'),
        array('name'=>'Anas','mobile'=>'9409093772')
    );

    $matrix =[
        [1,4,5],
        [8,2,0],
        [9,6,3]
    ];

// Convert JSON string to array

$jsonstring = '{"name":"Maiz", "age":30, "city":"MODASA"}';

$araay = json_decode($jsonstring, true); // use jason_decode() function to convert json string
print_r($array);




?>