<?php

$dados = ['Vinicius',10, 24];

//funcao list permite ter acesso aos dados do array individualmente sem precisar digitar variavel nova uma por uma

list($nome,$nota,$idade) = $dados; // vinicius sera nome 10 a nota 24 a idade
//ou
[$nome,$nota,$idade] = $dados;

// da pra fazer tbm quando tiver keys

$dados = ['nome'=>'Vinicius',
'nota'=>10,
'idade'=> 24];

['nome'=>$nome,'nota'=>$nota,'idade'=>$idade] = $dados;

//funcoes extract(array) transforma o array em variaveis automaticamente compact(variaveis) transforma variáveis em um array