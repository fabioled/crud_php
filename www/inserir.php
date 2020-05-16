<?php

include_once './conexao.php';

$conn = getConexao();
 
$sql = 'INSERT INTO pessoas (id,nome ) VALUES (?,?)';

$stmt = $conn->prepare($sql);
$stmt-> bindValue(1,7);
$stmt-> bindValue(2,'João Gilberto');

if($stmt->execute()){
    echo 'Cadastro realizado';
} else {
    echo 'Erro ao gravar';
}

?>