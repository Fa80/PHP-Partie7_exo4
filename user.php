<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie7_Exo2</title>
</head>
<body>
  <?php
    echo $_POST['nom'] . ' ' . $_POST['prenom'];
// $_GET et $_POST sont des tableaux de données associatifs et superglobaux.
//La méthode POST transmet les informations du formulaire de manière masquée mais non cryptée.
// Le fait de ne pas afficher les données ne signifie en rien qu'elles sont cryptées.
    ?>
  </body>
  </html>
