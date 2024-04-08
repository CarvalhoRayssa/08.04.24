<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeRestricao = $_POST['txtNomeRestricao']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoRestricao = $_POST['txtDescriçãoRestricao']; //(=) atribuição

$str_sql_cadastrar_restricao = "insert into `restricao` (`nome`,`descricao`) values
('$txtNomeRestricao','$txtDescricaoRestricao');";

try {
    $cadastrar_restricao = mysqli_query($conexao, $str_sql_cadastrar_restricao);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idRestricao'] = $ultimo_id;
    die('idRestricao:' . $_SESSION['idRestricao']);
} catch(Exception) {
    die('Não foi possivel cadastrar o restricao. str sql: ' . $str_sql_cadastrar_restricao);
}
?>