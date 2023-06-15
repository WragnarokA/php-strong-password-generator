<?php
include './funtion.php';

$result = "";
if (isset($_GET["pwdlen"])) {
    $pwdLength = $_GET["pwdlen"];
    $repetion = $_GET["repition"];

    $result = generatePsw($pwdLength, $repetion);

    session_start();
    $_SESSION['password'] = $result;

    // header("Location: ./session.php");
}


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

                <?php if (isset($result)) { ?>
                    <div class="col-12">
                        <div class="alert alert-primary mt-2 height" role="alert">
                            <?php echo $result ?>
                        </div>
                    </div>
                <?php } ?>


                <div class="col-12 mt-3 bg-light rounded p-5 d-flex ">
                    <form action="index.php" method="get">
                        <label for="pwdlen" class="m-r">Lunghezza password:</label>
                        <input class="IN" type="number" name="pwdlen" id="pwdlen" placeholder="Lunghezza password" min="8" max="30" value="25">


                        <div class="check d-flex  justify-content-between mt-3">
                            <label for="repition" class=" mt-4">Consenti ripetizioni di uno o più caratteri:</label>

                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="repition" id="repition" value="1">
                                    <label class="form-check-label" for="repition" value="1">
                                        Si
                                    </label>
                                </div>



                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="repition" id="repition" value="0">
                                    <label class="form-check-label" for="repition" value="0">
                                        No
                                    </label>
                                </div>

                            </div>
                        </div>


                        <div class="d-flex flex-column align-items-end">

                            <div class="col-4 my-3">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="subset_az" value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Lettere
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="subset_num" value="1">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Numeri
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="subset_simbol" value="1">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Simboli
                                    </label>
                                </div>

                            </div>
                        </div>





                        <div id="pulsantiera" class="mt-3">
                            <button class="btn btn-primary fs-3">Invia</button>
                            <button class="btn btn-secondary fs-3">Annulla</button>
                        </div>

                    </form>

                </div>

                <a href="./session.php">Vai a session.php</a>






            </div>
        </div>
    </div>

</body>

</html>