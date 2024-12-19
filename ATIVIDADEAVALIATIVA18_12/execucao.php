<?php

require_once("modelos/Gerente.php");
require_once("modelos/Desenvolvedor.php");
require_once("modelos/Estagiario.php");

$opcao = 0;
do {
    echo "\n";
    echo "\n";
    echo "\n##########  CALCULO DE SALARIO  ##########\n";
    echo "\n                              ";
    echo "1 --- GERENTE\n";
    echo "\n                              ";
    echo "2 --- DESENVOLVEDOR\n";
    echo "\n                              ";
    echo "3 --- ESTAGIO\n";
    echo "\n                              ";
    echo "0 --- SAIR\n";
    echo "\n";
    $opcao = readline("INSIRA A OPÇÃO DESEJADA --> ");
    switch ($opcao) {

        case 0:
            echo "SAINDO...";
            break;

        case 1:
            $gerente = new Gerente();
            $gerente->setNome(readline("NOME DO FUNMCIONARIO --> "));
            echo $gerente->SalarioSaida();
            break;

        case 2:
            $dev = new Desenvolvedor();
            $dev->setNome(readline("NOME DO DESENVOLVEDOR --> "));
            echo $dev->SalarioSaida();
            break;

        case 3:
            $estagio = new Estagiario();
            $estagio->setNome(readline("NOME DO ESTAGIARIO --> "));
            echo $estagio->SalarioSaida();
            break;

        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);
