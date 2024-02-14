<?php

$nota = [
  [
  'aluno' => 'Maria',
  'nota' => 10,
  ],
  [
    'aluno' => 'Vinicius',
    'nota' => 6,
  ],
    [
      'aluno' => 'Arna',
      'nota' => 2,
    ],
  ];

  function ordenarNotas(array $nota1, array$nota2):int { // para o sort sao comparados dois elementos
  // e precisa retornar uma int, se eu quero que a ordem seja o primeiro item retorno negativo, sem escolha retorna 0
  // caso seja ordem do segundo item retorno positivo
  // ao inves do if pode usar uma funcao unica que seria return $nota1['nota'] <=> $nota2['nota']
  // o <=> caso o primeiro elemento seja maior retorna 1, menor retorna -1, os dois iguais retornam 0
if($nota1['nota'] > $nota2['nota']){
  return -1;
}
if($nota2['nota'] > $nota1['nota']){
  return 1;
}
return 0;
  }

  usort($notas,'ordenarNotas'); //usort , sortear através de uma referência de função
  var_dump($notas);