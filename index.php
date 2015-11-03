<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/hello/:name' , function ($name) {
    
    $inteiro1 = 42; // tipo integer
    $inteiro2 = 79; // tipointeger
    $texto = "ola, "; // tipo string
    $fracao = 2.3; // tipo float
    
    $soma = $inteiro1 + $inteiro2;
    $divisao = $inteiro1 / $fracao;
    $multi = $inteiro2 * $fracao;
    
    $olaMundo = $texto . $name;
    
    echo "<p>Soma: " . $soma . "</p>";
    echo "<p>Divisao: " . $divisao . "</p>";
    echo "<p>Multiplica: " . $multi . "</p>";    
    echo "<p>" . $olaMundo . "</p>";
    echo "Hello, " . $name;
});

$app->run();