<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_inscription.css">

    <script src="./js/main.js" defer></script>
    <title>Rhuma Sug</title>
</head>

<body>
    <?php
    include "_header.php"
    ?>
    <main>
        <div class="bg">
            <section class="login-titre">
                <h2>Il est temps de créer son compte moule à gauffre !!</h2>
                <h1>Créer un compte</h1>
            </section>
            <section class="formulaire">

                <section class="coordonnees2">
                    <div>
                        <form class="form2" method="post" action="traitement.php" id="form">

                            <label for="Nom"></label><input type="text" name="nom" id="Nom" placeholder="Nom de famille" required />

                            <label for="Prénom"></label><input type="text" name="prenom" id="Prenom" placeholder="Votre Prénom" required />

                            <label for="Téléphone"></label><input type="tel" name="telephone" id="Telephone" placeholder="Numéro de téléphone" required />

                            <label for="Email"></label><input type="email" name="email" id="Email" placeholder="Votre Email" pattern="+@thebestmail.com" required />

                            <label for="Nom d'utilisateur"></label><input type="text" name=" nomdutilisateur" id="Nom_d_utilisateur" placeholder="Nom d'utilisateur" required />

                            <label for="Mot de passe"></label><input type="password" name="motdepasse" id="Mot_de_passe" placeholder="Mot de passe" required />

                            <input class='button' type="submit" name="envoyer" />
                            <p style="color: red;" id="erreur"></p>
                    </div>
                </section>

                </form>
        </div>
    </main>
    <?php
    include "_footer.php"
    ?>
</body>