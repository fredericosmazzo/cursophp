<?php
/* TIPO BÁSICO DE DADOS */

// String
$nome = "Hcode";
$site = 'www.hcode.com.br';
//Inteiro
$ano = 1990;
// Float
$salario = 5500.99;
// Booleano
$bloqueado = false;

/* TIPO COMPOSTOS DE DADOS */

// Array
$frutas = array("abacaxi", "laranja", "manga");

// echo $frutas[2];

// Objeto
$nascimento = new DateTime();

// var_dump($nascimento);

/* TIPO ESPECIAIS DE DADOS */

$arquivo = fopen("exemplo-03.php", "r");

// var_dump($arquivo);

$nulo = NULL; // (Variável não existe)

$vazio = ""; // (Variável foi reservada, mas não tem valor)



?>