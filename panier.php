<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_panier.css">
    <script src="./js/main.js" defer></script>
    <script type="module" src="./js/panier.js" defer></script>
    <script type="module" src="./js/fetch.js" defer></script>
    <script type="module" src="./js/main.js" defer></script>

    <title>Rhuma Sug</title>
</head>

<body>
    <?php
    include "_header.php"
    ?>
    <main>
        <section id="nav-progress">
            <div class="container-process">
                <p>Panier</p>
                <div></div>
            </div>
            <div class="container-process">
                <p>Identification</p>
                <div></div>
            </div>
            <div class="container-process">
                <p>Livraison</p>
                <div></div>
            </div>
            <div class="container-process">
                <p>Paiement</p>
                <div></div>
            </div>
        </section>
        <section id="panier">

        </section>
        <!-- ------------------------- remplir le bloc panier en js -------------------------->
    </main>
    <?php
    include "_footer.php"
    ?>
</body>

</html>