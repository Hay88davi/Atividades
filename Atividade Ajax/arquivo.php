<?php

$nome     = $_POST["nome"];
$idade    = $_POST["idade"];
$sexo     = $_POST["sexo"];
$telefone = $_POST["telefone"];
$email    = $_POST["email"];
$cidade   = $_POST["cidade"];

$empregados = [];

$resposta = [
    "nome"     => $nome,
    "idade"    => $idade,
    "sexo"     => $sexo,
    "telefone" => $telefone,
    "email"    => $email,
    "cidade"   => $cidade
];

array_push($empregados, $resposta);

$json_texto = json_encode(["empregados" => $empregados]);
echo ($json_texto);