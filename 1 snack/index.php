<?php
/**
     * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
     * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema.
     * Olimpia Milano - Cantù | 55-60
     *
     */

    $matches=[
      [
        "match" => "Olimpia Milano - Cantù" ,
        "points" => "55-60",
      ],
      [
        "match" => "ciano - lond" ,
        "points" => "75-66",
      ]
    ];
?>

<pre>
  <?php
  for ($i=0; $i < count($matches); $i++) { 
    echo( $matches[$i]["match"]."\n");
    echo( $matches[$i]["points"]."\n");
  }
  ?>
</pre>