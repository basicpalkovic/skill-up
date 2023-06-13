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

<body>
    <?php include("constants/header.php"); ?>

    <!--<section class="carousel">
        <div class="carousel-item carousel-item-visible">
            <img src="img/1.jpg" />
        </div>
        <div class="carousel-item">
            <img src="img/2.jpg" />
        </div>
        <div class="carousel-item">
            <img src="img/3.jpg" />
        </div>

        <div class="carousel-actions">
            <button id="carousel-button-prev" aria-label="Previous Slidex">
                < </button>
                    <button id="carousel-button-next" aria-label="Next Slide">></button>
        </div>
    </section>-->

    <section class="o-projektu">
        <div class="o-projektu-leva">
            <h2>O projektu</h2>
            <p>
                Ovaj projekat je za decu u vrtiću, decu
                od 3 do 7 godina. Ideja jeste da se deci
                predstavlja kultura volontera iz
                inostranstva kao i njegov/njen jezik kroz
                zabavne kreativne igrice koje pomažu
                deci da bolje nauče kao i da upoznaju
                nekog iz druge zemlje i na taj način ne
                razviju predrasude u daljim godinama. Sa njima se takođe priča engleski jezik i
                na taj način ga vežbaju od malih nogu i
                odmah izlaze iz zone komfora i stida.
            </p>
            <a class="btn-read-more btn-read-more-light">Pročitaj više</a>
        </div>
        <div class="o-projektu-desna">
            <img src="img/slika_28.png" alt="">
        </div>
    </section>

    <section class="zasto-projekat">
        <div class="zasto-projekat-leva">
            <img src="img/slika_39.png" alt="">
        </div>
        <div class="zasto-projekat-desna">
            <h2>Zašto izabrati ovaj projekat?</h2>
            <p>
                Obezbediti inkluzivno i kvalitetno obrazovanje i promovisati
                mogućnosti celoživotnog učenja.
                Cilj je da do kraja 2030. obezbediti da sve devojčice i dečaci
                završe besplatno, jednako i kvalitetno osnovno i srednje
                obrazovanje koje vodi ka relevantnim i delotvornim ishodima
                učenja...
            </p>
            <a class="btn-read-more btn-read-more-dark">Pročitaj više</a>
        </div>

    </section>

    <section class="benefiti">
        <h2>Benefiti</h2>
        <div class="grid-container">
            <div class="card">
                <img src="img/illustration1.png" alt="">
                <h4>Multikulturalno iskusvo
                    od malena</h4>
            </div>
            <div class="card">
                <img src="img/illustration2.png" alt="">
                <h4>Podizanje svesti deci
                    o svetu oko njih</h4>
            </div>
            <div class="card">
                <img src="img/illustration3.png" alt="">
                <h4>Učenje engleskog
                    jezika</h4>
            </div>
            <div class="card">
                <img src="img/illustration4.png" alt="">
                <h4>Poboljšanje engleskog
                    jezika</h4>
            </div>
        </div>

    </section>

    <section class="volonteri">
        <h2>Volonteri</h2>
        <div class="flex-container-volonteri">
            <div class="card-volonter">
                <img src="img/volonter1.png" alt="">
                <h4>Mihalis - Grčka</h4>
                <p>
                    Tokom leta u saradnji sa organizacijom AIESEC, posetio sam Srbiju i upoznao decu iz Srbije sa mojom domovinom. Već prve nedelje su mnogo toga naučili. Upoznali smo se sa....

                </p>
                <a class="btn-read-more btn-read-more-light">Pročitaj više!</a>

            </div>
            <div class="card-volonter">
                <img src="img/volonter2.png" alt="">
                <h4>Sloka - Indija</h4>
                <p>
                    Uživam u poseti Srbiji, u saradnji sa organizaciom AIESEC, uspela sam da upoznam Vašu zemlju, a dragoj dečici iz vrtića „Mali talenti“ dočaram deo indijske kulture i jezika...

                </p>
                <a class="btn-read-more btn-read-more-light">Pročitaj više!</a>

            </div>
            <div class="card-volonter">
                <img src="img/volonter3.png" alt="">
                <h4>Hiba - Turska</h4>
                <p>
                    Pokreće nas jedan cilj, a to je ispunjenje ljudskog potencijala. Deca imaju prilike da se upoznaju sa volonterkama iz Tunisa i Turske. . Imaće priliku da nauče mnogo o njihovoj kulturi, jeziku i običajima...
                </p>
                <a class="btn-read-more btn-read-more-light">Pročitaj više!</a>

            </div>
        </div>

    </section>



    <?php
    include("constants/nasi_saradnici.php");
    include("constants/footer.php");
    ?>




</body>

</html>