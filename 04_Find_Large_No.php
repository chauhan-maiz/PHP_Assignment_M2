<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div align="center">
        <div class="mb-5">
            <h3>Find Largest Number amoung Three Numbers</h3>
        </div>
        <div class="mb-5">
            <form action="#" method="post">
                <label for="n1" >N1:</label>
                <input type="number" name="n1">
                <label for="n1" >N2:</label>
                <input type="number" name="n2">
                <label for="n1" >N3:</label>
                <input type="number" name="n3">
                <br><br>
                <input type="submit" class="btn btn-primary" name="save" value="Submit">
                <hr>
            </form>
        </div>
        
        
        <?php
        if(isset($_POST['save'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];

            $ln = ($n1>$n2) ? (($n1>$n3) ? $n1 : $n3) : (($n2>$n3) ? $n2 : $n3);

            echo "<h1> Largest Number Between $n1, $n2 & $n3 is: $ln</h1>";
        }
        
        ?>
    </div>
</body>
</html>