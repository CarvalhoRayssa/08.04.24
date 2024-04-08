<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeObjetivoSmart = $_POST['txtNomeObjetivoSmart']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoObjetivoSmart = $_POST['txtDescriçãoObjetivoSmart']; //(=) atribuição

$str_sql_cadastrar_objetivo_smart = "insert into `objetivo smart` (`nome`,`descricao`) values
('$txtNomeObjetivoSmart','$txtDescricaoObjetivoSmart');";

try {
    $cadastrar_objetivo_smart = mysqli_query($conexao, $str_sql_cadastrar_objetivo_smart);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idObjetivoSmart'] = $ultimo_id;
    die('idObjetivoSmart:' . $_SESSION['idObjetivoSmart']);
} catch(Exception) {
    die('Não foi possivel cadastrar o objetivo smart. str sql: ' . $str_sql_cadastrar_objetivo_smart);
}
?>