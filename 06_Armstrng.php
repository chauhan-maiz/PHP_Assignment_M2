<!-- Check Number is Armstrong or Not -->
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
    <div class="container" align="center">
        <div class="mb-5">
            <h3>Check Armstrong Number::</h3>
        </div>
        <div class="mb-5">
            <form action="#" method="post">
                <label for="inputnumber"><h4>Enter Number: </h4></label>
                <input type="number" name="num">
                <input type="submit" name="save" value="Submit" class="btn btn-primary">
            </form>
            
        </div>

        <?php
        if(isset($_POST['save'])){
            $no = $_POST['num'];
            $sum=0;
            $temp=$no;

            while($no>0){
                $rem=$no%10;
                $sum +=($rem*$rem*$rem);
                $no = floor($no/10);
            }
            if($sum==$temp){
                echo "<h3> $temp is a Armstrong Number.</h3>";
            }else{
                echo "<h3> $temp is Not a Armstrong Number.</h3>";
            }
        }
        ?>
    </div>
 </body>
 </html>