<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <p>
<?php
/*Déclaration de la fonction*/
  function concat($chaine1, $chaine2){
    /*Nommage de la variable concatener qui prend les deux parametres*/
    $concatener = $chaine1 . $chaine2;
    /*on retourne la variable*/
    return $concatener;
  }
  /*On affecte la fonction ainsi que les valeurs des parametres*/
  $concatener = concat('Fabien', ' Lamotte');
  /*Puis on affiche le contenu*/
  echo 'Je m\'appelle ' . $concatener;
 ?>
    </p>
  </body>
</html>
