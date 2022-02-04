<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_rhum.css">
    <script src="./js/main.js" defer></script>
    <title>Rhuma Sug</title>
</head>

<body>
    <?php
    include "_header.php"
    ?>
    <main>
        <div class="bg">
            <div class="titre-produit-rhum">
                <h2>Nos&nbsp</h2>
                <h1>Produits : &nbsp</h1>
                <h2>Les Rhums</h2>
            </div>
            <section class="bloc1-produit-rhum">
                <article class="article1-produit-rhum">
                    <div class="text-article1">
                        <h4>Dzama Rhum</h4>
                        <p>Rhum agricole 50° Elevé en fût de chêne pendant 15 ans.</p>
                        <form action="Dzama.php">
                            <button class="button1">Découvrir</button>
                        </form>
                        <div class="bloc-grosse-bouteille">
                            <img class="grosse-bouteille" src="./image/dzama-class.png" alt="bouteille de rhum de marque Dzama">
                        </div>
                    </div>
                </article>

                <article class="article2-produit-rhum">

                    <article class="article3-produit-rhum">
                        <div>
                            <h4>Marley'Ola</h4>
                            <p>Rhum vieux ambré 55° Elevé en fût de sapins pendant 1 semaine.</p>
                            <form action="marley.php">
                                <button class="button1">Découvrir</button>
                            </form>
                        </div>
                        <img src="./image/bouteille-fine.png" alt="bouteille de rhum de 8 ans d'âge.">
                    </article>

                    <article class="article4-produit-rhum">
                        <div>
                            <h4>Vanilla Créola</h4>
                            <p>Rhum vieux ambré 45° Elevé en fût de chêne pendant 150 ans.</p>
                            <form action="vanilla.php">
                                <button class="button1">Découvrir</button>
                            </form>
                        </div>
                        <img src="./image/bouteille-petite.png" alt="bouteille de rhum de 150 ans d'âge.">
                    </article>
                </article>
            </section>
        </div>
    </main>
    <?php
    include "_footer.php"
    ?>
</body>


</html>