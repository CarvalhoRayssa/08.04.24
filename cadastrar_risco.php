<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeRisco = $_POST['txtNomeRisco']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoRisco = $_POST['txtDescriçãoRisco']; //(=) atribuição

$str_sql_cadastrar_risco = "insert into `riscos` (`nome`,`descricao`) values
('$txtNomeRiscos','$txtDescricaoRiscos');";

try {
    $cadastrar_risco = mysqli_query($conexao, $str_sql_cadastrar_risco);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idRisco'] = $ultimo_id;
    die('idRisco:' . $_SESSION['idRisco']);
} catch(Exception) {
    die('Não foi possivel cadastrar o risco. str sql: ' . $str_sql_cadastrar_risco);
}
?>