<?php

$notas = [10,9,8,7,6];

rsort($notas); //sort só que no inverso
var_dump($notas);

//gettype(variavel) para mostrar o tipo da variavel - string, array etc... pode ser usado em if por ex
// no caso de array pode usar a funcao is_array(variavel) 
// array_key_exists('Vinicius', $notas)  funcao para array para descobrir se um elemento(chave) está presente no array
//posso usasr tambem a funcao isset(variavel[itemarray]), para descobrir se o elemento(chave) está presente e não nulo
//in_array(valor, array) para verificar se um valor numérico está presente


//ana vez a prova? var_dump(isset($notas['Ana'])));
//alguem tirou 10? var_dump(in_array(needle:10,$notas,strict:true)); retorna se true o valor 10
//quem tirou 10? array_search(needle:10,$notas); - retorna a chave que possui o valor 10


