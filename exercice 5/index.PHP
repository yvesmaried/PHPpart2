<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 5</title>
</head>

<body>
    <h1>exercice 5</h1>
    <p>Traduire ce code avec des if et des else :</p>
    <p>?php</p>
    <p>echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
        ?></p>

    <?php
      $gender = 'Homme';

      if ($gender != 'Homme'){
          echo 'C\'est un développeur !!!';
      }else{
          echo 'C\'est une développeuse !!!';
      }
    ?>

</body>

</html>