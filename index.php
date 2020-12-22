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
    echo "Partita: " . $matches[$current]["casa"] . " - " . $matches[$current]["ospite"] . " | " . $matches[$current]["punti_casa"] . " - " . $matches[$current]["punti_ospite"] . "<br>";
  }

  /* PHP Snack 2:
Passare come parametri GET name, mail e age everificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];

  if (strlen($name) > 3 &&  strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age)) { //SE la lunghezza di name è maggiore a tre E mail contiene . non è identico a falso E mail contiene @ non è identico a falso e age è un numero
    echo "Accesso Riuscito"; //allora bene
  } else { //diversamente
    echo "Accesso Negato"; //vattene ******
  }


  ?>



</body>

</html>