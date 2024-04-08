<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeProjeto = $_POST['txtNomeProjeto']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoProjeto = $_POST['txtDescriçãoProjeto']; //(=) atribuição

$str_sql_cadastrar_projeto = "insert into `projetos` (`nome`,`descricao`) values
('$txtNomeProjeto','$txtDescricaoProjeto');";

try {
    $cadastrar_projeto = mysqli_query($conexao, $str_sql_cadastrar_projeto);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idProjeto'] = $ultimo_id;
    die('idProjeto:' . $_SESSION['idProjeto']);
} catch(Exception) {
    die('Não foi possivel cadastrar o projeto. str sql: ' . $str_sql_cadastrar_projeto);
}
?>