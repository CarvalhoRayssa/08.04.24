<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeCusto = $_POST['txtNomeCusto']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoCusto = $_POST['txtDescriçãoCusto']; //(=) atribuição

$str_sql_cadastrar_custo = "insert into `custos` (`nome`,`descricao`) values
('$txtNomeCusto','$txtDescricaoCusto');";

try {
    $cadastrar_custo = mysqli_query($conexao, $str_sql_cadastrar_custo);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idCusto'] = $ultimo_id;
    die('idCusto:' . $_SESSION['idCusto']);
} catch(Exception) {
    die('Não foi possivel cadastrar o custo. str sql: ' . $str_sql_cadastrar_custo);
}
?>