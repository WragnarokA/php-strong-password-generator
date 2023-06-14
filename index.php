<?php
include "./funtion.php";

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
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h1 class="d-flex justify-content-center mt-5">Strong Password Generator</h1>
                <h2 class="d-flex justify-content-center mt-2 text-light fs-1">Genera una password sicura</h2>
            </div>

            <?php if (isset($result)) { ?>
                <div class="col-12">
                    <div class="alert alert-primary mt-5" role="alert">
                        <?php echo $result ?>
                    </div>
                </div>
            <?php } ?>


            <div class="col-12 mt-3 bg-light rounded">
                <form action="index.php" method="get">
                    <label for="pwdlen" class="text-light">Lunghezza password:</label>
                    <input class="IN" type="number" name="pwdlen" id="pwdlen" placeholder="Lunghezza password" min="8" max="30">

                    <div id="pulsantiera" class="mt-3">
                        <button class="btn btn-primary">Invia</button>
                        <button class="btn btn-secondary">Annulla</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>