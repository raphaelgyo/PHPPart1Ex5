<!--ici on insère le PHP qui n'est pas lié à l'affichage-->
<?php
//Déclaration de la variable lastname
$answer = 'yes';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 1 Exercice 5</title>
  </head>
  <body>
    <p>
    <!--ici on insère le PHP qui est lié à l'affichage-->
      <?php
      if ($answer == 'yes'){
      echo 'Vous avez répondu'.' '.'oui';
      }else{
        echo 'Vous avez répondu'.' '.'non';
      }
      ?>
    </p>
  </body>
</html>
