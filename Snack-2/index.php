<!--
  Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<?php 



$passa = true;
$error = '';

if(empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])){
  $error = 'Inserire tutti i dati';
  $passa = false;
}

elseif(strlen($_GET['name']) < 3 ){  
  $error = 'Il nome deve essere lungo almeno 3 caratteri';
  $passa = false;
}

elseif(!strpos($_GET['mail'], '@') || !strpos($_GET['mail'], '.')){
  $error = 'La mail deve avere la chicciola e il punto';
  $passa = false;
}

elseif(!is_numeric($_GET['age'])){
  $error = 'Age deve essere un numero';
  $passa = false;
}

if($passa){
  $output = 'FUNZIONA';
}else{
  $output = 'Riprova';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>
    
<h1>Controlla MAIL</h1>
<h3><?php echo $output ?></h3>

<?php if(!$passa): ?>
  <i>Errore: <?php echo $error ?></i>
<?php endif; ?>

</body>
</html>