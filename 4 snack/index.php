<!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
<?php
$numbers=[];
$i=0;
while (count($numbers) < 15) {
  $randomNumber=rand(1,100);
  if(!in_array($randomNumber,$numbers)){
    $numbers[$i] = $randomNumber;
    $i++;
  }
}
var_dump($numbers)
?>