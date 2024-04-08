<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomePremissa = $_POST['txtNomePremissa']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoPremissa = $_POST['txtDescriçãoPremissa']; //(=) atribuição

$str_sql_cadastrar_premissa = "insert into `premissas` (`nome`,`descricao`) values
('$txtNomePremissa','$txtDescricaoPremissa');";

try {
    $cadastrar_premissa = mysqli_query($conexao, $str_sql_cadastrar_premissa);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idPremissa'] = $ultimo_id;
    die('idPremissa:' . $_SESSION['idPremissa']);
} catch(Exception) {
    die('Não foi possivel cadastrar o premissa. str sql: ' . $str_sql_cadastrar_premissa);
}
?>