<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Find Leap Year Between 1901 to 2016</h1>
    <?php
    for($y=1901;$y<=2016;$y++){
        if($y%4==0){
            if($y % 100 == 0){
                if($y % 400 == 0)
                {
                    echo "<h3> $y is a Leap Year.</h3><br>";
                }else{
                    echo "$y is not a Leap Year.<br>";
                }
            }else{
                echo "<h3>$y is a Leap Year.</h3><br>";
            }
        }else{
            echo "$y is not a Leap Year.<br>";
        }
    }
    ?>
</body>
</html>