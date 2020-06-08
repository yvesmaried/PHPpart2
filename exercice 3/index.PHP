<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 3</title>
</head>

<body>
    <h1>exercice 3</h1>
    <p></p> Créer deux variables age et gender. La variable gender peut prendre comme valeur :</p>
    <p>Homme</p>
    <p>Femme</p>
    <p>En fonction de l'âge et du genre afficher la phrase correspondante :</p>
    <p>Vous êtes un homme et vous êtes majeur</p>
    <p>Vous êtes un homme et vous êtes mineur</p>
    <p>Vous êtes une femme et vous êtes majeure</p>
    <p>Vous êtes une femme et vous êtes mineur</p>
    <p>Gérer tous les cas.</p>

    <?php

    $age = '66';
    $gender = 'homme';

    if ($age >= 18 && $gender == "homme") {
         echo "Vous êtes un homme et vous êtes majeur";
    } else if ($age <= 18 && $gender == "homme") {
          echo "Vous êtes un homme et vous êtes mineur";
    } else if ($age >= 18 && $gender == "femme") {
         echo "Vous êtes une femme et vous êtes majeure";
    } else if ($age <= 18 && $gender == "femme") {
         echo "Vous êtes une femme et vous êtes mineur";
}


?>

</body>

</html>