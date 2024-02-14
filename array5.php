<?php

$notasBimestre1 = [
  'Vinicius' => 6,
  'Joao' => 8,
  'Ana' => 10,
  'Roberto' => 7,
  'Maria' => 9,
  
];


$notasBimestre2 = [
  'Vinicius' => 7,
  'Joao' => 8,
  'Ana' => 10,
  'Maria' => 9,
  
];

var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
// está comparando a diferença dos itens do array  para os do 2, e apresenta essa diferença
// o key é para só comparar a chave e não os numeros
// array_keys - para retornar apenas as keys , se quiser só valor keys = values;