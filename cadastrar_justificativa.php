<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeJustificativa = $_POST['txtNomeJustificativa']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoJustificativa = $_POST['txtDescriçãoJustificativa']; //(=) atribuição

$str_sql_cadastrar_justificativa = "insert into `justificativas` (`nome`,`descricao`) values
('$txtNomeJustificativa','$txtDescricaoJustificativa');";

try {
    $cadastrar_justificativa = mysqli_query($conexao, $str_sql_cadastrar_justificativa);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idJustificativa'] = $ultimo_id;
    die('idJustificativa:' . $_SESSION['idJustificativa']);
} catch(Exception) {
    die('Não foi possivel cadastrar o justificativa. str sql: ' . $str_sql_cadastrar_justificativa);
}
?>