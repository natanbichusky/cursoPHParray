<?php

$alunos2021 = [
  'Vinicius',
  'Joao',
  'Ana',
  'Roberto',
  'Maria',
];

$novosAlunos = [
  'Patricia',
  'Escanor',
  'Nezuko',
  'Nino',
];

$alunos2022 = array_merge($alunos2021, $novosAlunos); //"soma" de arrays
//as chaves numéricas vão em ordem sequencial , não zeram de novo, se for em string
//iguais a segunda sobrescreve a primeira   
var_dump($alunos2022);
//adicionar e remover dados

array_push($alunos2022, 'Alice','Bob'); //adiciona os nomes no array de referencia (ao final)
$alunos2022[] = 'Chipo'; //para adicionar apenas UM elemento
array_unshift($alunos2022,'Paprio','Broda'); //adiciona os nomes no array de referencia mas no começo
//arrayshift remove o primeiro arraypop remove o último