<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Global Classroom</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo-mini.ico" />
</head>
<?php
include("constants/header.php");
?>

<body>
    <div class="termini">
        <h2>Termini</h2>
        <div class="flex-container-termini">
            <div class="card-termin letnji">
                <img src="img/sun_icon.png" alt="">
                <h4>Letnji termin</h4>
                <p><span class="bold">Početak projekta: </span>17. jul</p>
                <p>
                    <span class="bold">Trajanje projekta: </span>5 nedelja
                    <span class="small-text">(svaki dan od 8h do 12h)</span>
                </p>

                <p><span class="bold">Cena: </span>500&euro;</p>
                <button class="btn-prijavi-se btn-letnji">Prijavi se!</button>
            </div>
            <div class="card-termin zimski">
                <img src="img/snowflake_icon.png" alt="">
                <h4>Zimski termin</h4>
                <p><span class="bold">Početak projekta: </span>17. jul</p>
                <p>
                    <span class="bold">Trajanje projekta: </span>5 nedelja
                    <span class="small-text">(svaki dan od 8h do 12h)</span>
                </p>

                <p><span class="bold">Cena: </span>500&euro;</p>
                <button class="btn-prijavi-se btn-zimski">Prijavi se!</button>
            </div>
            <div class="card-termin crvena">
                <img src="img/global_host.png" alt="">
                <h4>Zimski termin</h4>
                <p><span class="bold">Početak projekta: </span>23. januar</p>
                <p>
                    <span class="bold">Trajanje projekta: </span>5 nedelja
                    <span class="small-text">(svaki dan od 8h do 12h)</span>
                </p>

                <p><span class="bold">Cena: </span>500&euro;</p>
                <button class="btn-prijavi-se btn-crveni">Prijavi se!</button>
            </div>

        </div>


    </div>

    <?php
    include("constants/footer.php");
    ?>
</body>