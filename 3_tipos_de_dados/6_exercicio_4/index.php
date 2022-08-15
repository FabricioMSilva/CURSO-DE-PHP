<?php

  echo 4.15;
  echo "<br>";
  echo 12.12;
  echo "<br>";

  $c = -78.1;

  echo $c;
  echo "<br>";

  if(is_float($c)) {
    echo "Sim, podemos ter floats negativos!";
  }

  if(is_int($c)) {
    echo "É um inteiro";
  }

  echo "<br>";
$n1 = 232.12;


$n2 = 26.5;


$n3 = 2324.54;

echo "primeiro numero $n3 segundo numro $n2 terceiro numero $n1";

 if (is_float($n1))
{echo "é float";}