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
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3>Enter Marks</h3>
                <form action="#" method="post">
                    <div class="mb-3">
                        <table class="mb-3">
                            <thead align="center">
                                <tr>
                                    <th>Chem</th>
                                    <th>Maths</th>
                                    <th>Phy</th>
                                    <th>Comp</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="number" class="form-control" name="che"></td>
                                    <td><input type="number" class="form-control" name="Maths"></td>
                                    <td><input type="number" class="form-control" name="Phy"></td>
                                    <td><input type="number" class="form-control" name="Com"></td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <input type="Submit" class="btn btn-primary" name="save">
                    </div>
                </form>
                <?php
                if(isset($_POST['save'])){
                    $che=$_POST['che'];
                    $math=$_POST['Maths'];
                    $phy=$_POST['Phy'];
                    $com=$_POST['Com'];
                    $total=($che+$math+$phy+$com);
                    $per=$total/4;

                    if($per>=90){
                        $grade='A';
                    } else if($per>=70 && $per<90){
                        $grade='B';
                    } else if($per>=50 && $per<70){
                        $grade='C';
                    } else if($per>=35 && $per<50){
                        $grade='D';
                    }else{
                        $grade='Fail';
                    }
                }
                ?>
                <br><br>
                <h3>Marksheet and grade</h3>
                <hr>
                <table class="table">
                    <thead >
                        <tr >
                            <th>Chem </th>
                            <th>Maths</th>
                            <th>Phy</th>
                            <th>Comp</th>
                            <th>Total</th>
                            <th>Percentage</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $_POST['che']?></td>
                            <td><?php echo $_POST['Maths']?></td>
                            <td><?php echo $_POST['Phy']?></td>
                            <td><?php echo $_POST['Com']?></td>
                            <td><?php echo $total ?></td>
                            <td><?php echo $per ?></td>
                            <td><?php echo $grade ?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>
</html>