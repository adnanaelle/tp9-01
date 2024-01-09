<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP</title>
    <link rel="stylesheet" href="./inscription.css">
</head>

<body>
    
    <h1>TP</h1>
    <h2>Inscription</h2>
    <form action="tp/inscription.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required><br>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" required><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required><br>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required><br>
        <label for="password2">Confirmer le mot de passe</label>
        <input type="password" name="password2" id="password2" required><br>
        <input class="envoyer" type="submit" value="Envoyer">
    </form>
</body>

</html>