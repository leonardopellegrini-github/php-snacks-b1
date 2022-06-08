<!--
  Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
-->

<?php 

$db = [
  'teachers' => [
      [
          'name' => 'Michele',
          'lastname' => 'Papagni'
      ],
      [
          'name' => 'Fabio',
          'lastname' => 'Forghieri'
      ]
  ],
  'pm' => [
      [
          'name' => 'Roberto',
          'lastname' => 'Marazzini'
      ],
      [
          'name' => 'Federico',
          'lastname' => 'Pellegrini'
      ]
  ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 6</title>
  <style>
    div{
      height: 500px;
      width: 500px;
      text-align: center;
      vertical-align: center;
    }

    .teachers{
      background-color: green;
    }

    .pm{
      background-color: grey;
    }

  </style>
</head>
<body>
    <?php foreach($db as $role => $people): ?>
      <div class="<?php echo $role ?>">
        <ul>
          <?php foreach($people as $person): ?>
            <?php echo $person['name']; $person['lastname']; ?>
            <?php endforeach ?>
        </ul>
      </div>
      <?php endforeach ?>
</body>
</html>