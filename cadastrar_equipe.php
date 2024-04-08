<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeEquipe = $_POST['txtNomeEquipe']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoEquipe = $_POST['txtDescriçãoEquipe']; //(=) atribuição

$str_sql_cadastrar_equipe = "insert into `equipes` (`nome`,`descricao`) values
('$txtNomeEquipe','$txtDescricaoEquipe');";

try {
    $cadastrar_equipe = mysqli_query($conexao, $str_sql_cadastrar_equipe);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idEquipe'] = $ultimo_id;
    die('idEquipe:' . $_SESSION['idEquipe']);
} catch(Exception) {
    die('Não foi possivel cadastrar o equipe. str sql: ' . $str_sql_cadastrar_equipe);
}
?>