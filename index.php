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
  /*Puis on affiche le contenu*/
  echo 'Je m\'appelle ' . concat('Fabien', ' Lamotte');
 ?>
    </p>
  </body>
</html>
