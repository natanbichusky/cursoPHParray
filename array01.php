<?php

$array = [
  1 =>'um',
  2 => 'dois',
  3 => 'tres',
];


foreach( $array as $numero => $nomeNumero){
  echo "$numero escrito é : $nomeNumero".PHP_EOL;
}

echo "Total".count($array).PHP_EOL;