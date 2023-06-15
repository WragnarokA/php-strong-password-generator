<?php
session_start()


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PASSWORD Generator</title>

</head>

<body>
    <div class="container fs-3">
        <div class="row">
            <div class="col-12 ">
                <h1 class="d-flex justify-content-center mt-5">Strong Password Generator</h1>
                <h2 class="d-flex justify-content-center mt-4 text-light fs-1">Genera una password sicura</h2>
            </div>

            <div class="col-12 mt-3 rounded ">


                <div class="col-12">
                    <div class="alert alert-primary mt-2 height" role="alert">
                        <?php echo $_SESSION['password'] ?>
                    </div>
                    <a href="./index.php">Genera nuova password</a>
                </div>



            </div>


        </div>
    </div>

</body>

</html>