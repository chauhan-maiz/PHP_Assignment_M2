<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align="center">
        <h1>Print Fibonacci Series: </h1>
        <br><hr><br>
        <?php
        $n=8;
        $a=0;
        $b=1;
        echo "<h3>$a <br> $b</h3>";
        for($i=0; $i<$n; $i++){
            $c=$a+$b;
            echo "<h3> $c<h3>";
            $a=$b;
            $b=$c;
        }
        
        ?>
    </div>
    
</body>
</html>