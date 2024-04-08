<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeProduto = $_POST['txtNomeProduto']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoProduto = $_POST['txtDescriçãoProduto']; //(=) atribuição

$str_sql_cadastrar_produto = "insert into `produtos` (`nome`,`descricao`) values
('$txtNomeProduto','$txtDescricaoProduto');";

try {
    $cadastrar_produto = mysqli_query($conexao, $str_sql_cadastrar_produto);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idProduto'] = $ultimo_id;
    die('idProduto:' . $_SESSION['idProduto']);
} catch(Exception) {
    die('Não foi possivel cadastrar o produto. str sql: ' . $str_sql_cadastrar_produto);
}
?>