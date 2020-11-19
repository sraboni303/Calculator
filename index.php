<?php include_once "functions.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title> Calculator </title>
  </head>
  <body>

<div class="container w-50 mx-auto mt-5">
    <h2 class="text-info mb-3">Calculator</h2>
    <form action="" method="POST" class="mb-5">
        <div class="card shadow">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Enter First Number</td>
                        <td> <input type="number" name="num1"> </td>
                    </tr>
                    <tr>
                        <td>Enter First Number</td>
                        <td> <input type="number" name="num2"> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <input class="btn btn-info" type="submit" name="submit" value="Calculate"> </td>
                    </tr>
                </table>
            </div>
        </div>  
    </form>



<?php

    if(isset($_POST['submit'])){

        // Get Values:
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Validation:
        if(empty($num1) || empty($num2)){

            echo "<p class='alert alert-danger'>Fields must not empty !! <button class='close' data-dismiss='alert'> &times; </button> </p>";

        }else{

        echo "First Number is : " . $num1 . "<br>" ;
        echo "Last Number is : " . $num2 . "<hr>" ;

            $cal = new Calculation;

            $cal -> add( $num1, $num2 );
            $cal -> sub( $num1, $num2 );
            $cal -> mul( $num1, $num2 );
            $cal -> div( $num1, $num2 );

        }

    }

?>



</div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
  </body>
</html>








