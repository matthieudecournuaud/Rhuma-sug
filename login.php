<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_login.css">

    <script src="./js/main.js" defer></script>
    <title>Rhuma Sug</title>
</head>

<body>
    <?php
    include "_header.php"
    ?>

    <main>
        <div class="bg-login">
            <!-- <div class="image-pirate-login"> -->
            <section class="login-titre">
                <h2>Connecte toi marin d'eau douce !!</h2>
                <h1>Se connecter</h1>
            </section>
            <section class="structure-login">
                <section class="coordonnees">
                    <div>
                        <form class="form" method="post" action="traitement.php" id="form">
                            <label for="Identifiant"></label><input type="text" name="Identifiant" id="Identifiant" placeholder="Identifiant" required='required' />
                            <label for="Mot de passe"></label><input type="password" name="motdepasse" id="Mot_de_passe" placeholder="Mot de passe" required='required' />
                            <input class='button' type="submit" name="envoyer" />
                            <a href="inscription.php">S'inscrire</a>
                            <p style="color: red;" id="erreur"></p>
                        </form>
                    </div>
        </div>
        </section>
        </section>
        </div>
    </main>
    <?php
    include "_footer.php"
    ?>
</body>