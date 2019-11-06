<?php

include "Pessoas.php";
include "Funcionarios.php";

$pessoaUm = new Pessoas();  //para criar um objeto, uso o new e pego a 'planta' (classe)
$pessoaUm->nome= "Luana";
// $pessoaUm->idade= 37; esse atributo é privado, só a classe pode alterar, por aqui não da. Temos de criar um método dentro da classe pra isso 
$pessoaUm->setIdade(37); //acessei o método da classe para poder mudar um atributo privado. 

echo "<h1>".$pessoaUm->nome."</h1>";
// echo "<h1>".$pessoaUm->idade."</h1>"; tb não consigo mostrar pro usuário. var_dump da certo pq mostra pro desenvolvedor. Temos de ter um método acessor pra tb poder funcionar
echo "<h1>".$pessoaUm->getIdade()."</h1>";

$pessoaDois = new Pessoas();
$pessoaDois->nome= "Daniel";

$funcionarioUm = new Funcionarios();
$funcionarioUm->nome = "Ligia";
$funcionarioUm->setIdade(22);
var_dump($funcionarioUm);

// var_dump($pessoaUm);
// var_dump sem alterar nada 
// object(Pessoas)#1 (4) {
//     ["nome"]=>
//     NULL
//     ["idade":"Pessoas":private]=>
//     NULL
//     ["cpf":protected]=>
//     NULL
//     ["email"]=>
//     NULL
//   }
//ESTADO ATUAL DO OBJETO, COMO ELE ESTÁ NO MOMENTO. PARA ALTERAR O ESTADO, BASTA ALTERAR ALGO (EX. COLOCAR O NOME). Var_dump abaixo
// object(Pessoas)#1 (4) {
//     ["nome"]=>
//     string(5) "Luana"
//     ["idade":"Pessoas":private]=>
//     NULL
//     ["cpf":protected]=>
//     NULL
//     ["email"]=>
//     NULL
//   }

// var_dump($pessoaDois);
// object(Pessoas)#2 (4) {
//     ["nome"]=>
//     string(6) "Daniel"
//     ["idade":"Pessoas":private]=>
//     NULL
//     ["cpf":protected]=>
//     NULL
//     ["email"]=>
//     NULL
//   }
  
?>