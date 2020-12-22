<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Snacks Blocco 1</title>
</head>

<body>

  <!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

  <?php
  $matches = array(
    array( //array 0
      "casa" => "Veneto SS", //0
      "ospite" => "Piemonte KGB", //1
      "punti_casa" => 20, //2
      "punti_ospite" => 20, //3
    ),
    array( //array 1
      "casa" => "Lombardia SA", //0
      "ospite" => "Campania 5S", //1
      "punti_casa" => 25, //2
      "punti_ospite" => 15, //3
    ),
    array( //array 2
      "casa" => "Sicilia GS", //0
      "ospite" => "Emilia MD", //1
      "punti_casa" => 30, //2
      "punti_ospite" => 25, //3
    ),
  );

  for ($i = 0; $i < count($matches); $i++) {
    $keys = array_keys($matches);
    $current = $keys[$i];
    echo "Partita 1: " . $matches[$current]["casa"] . " - " . $matches[$current]["ospite"] . " | " . $matches[$current]["punti_casa"] . " - " . $matches[$current]["punti_ospite"] . "<br>";
  }


  ?>



</body>

</html>