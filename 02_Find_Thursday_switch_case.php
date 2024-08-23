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
        <h2>Find Thursday in week using switch case.</h2>
        <br><hr>
        <div class="col-2">
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="week" class="form-label"><h4>Enter No. to Find Day</h4
                    ></label>
                    <input type="number" class="form-control" name="Day">
                </div>
                
                <input type="submit" name="save" class="btn btn-primary" value="Submit">
            </form>
        </div>
        <br><hr>
       <h1> <?php
        if(isset($_POST['save'])){

        
            $day = $_POST['Day'];
            switch($day){
                case 1: 
                    echo "It's Monday.";
                    break;
                case 2:
                    echo "It's Teusday.";
                    break;
                case 3:
                    echo "It's Wednesday.";
                    break;
                case 4:
                    echo "It's Thursday.";
                    break;
                case 5:
                    echo "It's Friday.";
                    break;
                case 6:
                    echo "It's Saturday.";
                    break;
                case 7:
                    echo "It's Sunday.";
                    break;
                default:
                    echo "Invalid input!!";
                    break;
            }
        }
        ?></h1>
    </div>
    
</body>
</html>