<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
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
  $dbValues=array_values($db);
  $dbKeys = array_keys($db);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
  </head>
  <body class="d-flex">
    <div class="bg-secondary w-50">
      <h1 class="text-center text-white">Insegnanti</h1>
      <?php
        for ($i=0; $i < count($dbValues[0]); $i++) { 
          ?>
        <h3>
          <?php
            echo $dbValues[0][$i]["name"]."\n";
            echo $dbValues[0][$i]["lastname"];
          ?>
        </h3>
      <?php
        }
      ?>
    </div>
    <div class="bg-success w-50">
      <h1 class="text-white text-center">PM</h1>
    <?php
      for ($i=0; $i < count($dbValues[1]); $i++) { 
        ?>
      <h3>
        <?php
          echo $dbValues[1][$i]["name"]."\n";
          echo $dbValues[1][$i]["lastname"];
        ?>
      </h3>
      <?php
        }
      ?>
    </div>
  </body>
</html>