<!--
  Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

  Olimpia Milano - Cantù | 55-60
-->



<?php 

$Squadre=[ "Olimpia Milano - Cantù","Olimpia Milano - Cantù","Olimpia Milano - Cantù","Olimpia Milano - Cantù","Olimpia Milano - Cantù","Olimpia Milano - Cantù","Olimpia Milano - Cantù","Olimpia Milano - Cantù"];

$Punteggio=[ 
"55-60","55-60","55-70","55-60","55-60","50-60", "55-80", "55-60", "46-60",
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>
    
<h1>I RISULTATI SONO:</h1>

<ul>
  <?php for($i = 0; $i < 8; $i++){?>
    <li><?php echo $Squadre[$i]; echo $Punteggio[$i]  ?></li> 
  <?php } ?>

</ul>

</body>
</html>