<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <p>
      <?php
      /*Déclaration d'une variable en chaîne de caractère*/
      $string = 'Ceci est une chaîne de caractère';
      /*Déclaration d'une variable en int(nombre entier)*/
      $int = 5;
      /*Déclaration d'une variable en nombre à virgule(float)*/
      $float = 5.3;
      /*Déclaration d'une variable en boolean(true or false)*/
      $boolean = true;
      /*Affichage des variables*/
      echo $string . ' , ' . var_dump($int) .  $float . ' , ' . $boolean;
      ?>
    </p>
  </body>
  </html>
