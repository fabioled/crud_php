
<?php

include_once './conexao.php';

$conn = getConexao();
 
$data = $conn->query('SELECT * FROM pessoas');

foreach($data as $row) {
    print_r($row);    
    echo "<br>";
}

?>