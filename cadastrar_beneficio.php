<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeBeneficio = $_POST['txtNomeBeneficio']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoBeneficio = $_POST['txtDescriçãoBeneficio']; //(=) atribuição

$str_sql_cadastrar_beneficio = "insert into `beneficios` (`nome`,`descricao`) values
('$txtNomeBeneficio','$txtDescricaoBeneficio');";

try {
    $cadastrar_beneficio = mysqli_query($conexao, $str_sql_cadastrar_beneficio);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idBeneficio'] = $ultimo_id;
    die('idBeneficio:' . $_SESSION['idBeneficio']);
} catch(Exception) {
    die('Não foi possivel cadastrar o beneficio. str sql: ' . $str_sql_cadastrar_beneficio);
}
?>