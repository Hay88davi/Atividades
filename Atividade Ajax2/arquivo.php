<?php
// Recebe os dados enviados via POST
$matricula = $_POST["matricula"];
$nome = $_POST["nome"];

// Aqui você pode fazer alguma validação dos dados, por exemplo, verificar se a matrícula e o nome estão preenchidos corretamente.

// Simulando um tempo de processamento (pode ser removido em produção)
sleep(1);

// Prepara a resposta no formato JSON
$response = array(
    "matricula" => $matricula,
    "nome" => $nome
);

// Retorna a resposta para a função JavaScript em formato JSON
echo json_encode($response);
?>
