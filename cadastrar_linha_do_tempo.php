<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeLinhaDoTempo = $_POST['txtNomeLinhaDoTempo']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoLinhaDoTempo = $_POST['txtDescriçãoLinhaDoTempo']; //(=) atribuição

$str_sql_cadastrar_linha_do_tempo = "insert into `linha do tempo` (`nome`,`descricao`) values
('$txtNomeLinhaDoTempo','$txtDescricaoLinhaDoTempo');";

try {
    $cadastrar_linha_do_tempo = mysqli_query($conexao, $str_sql_cadastrar_linha_do_tempo);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idLinhaDoTempo'] = $ultimo_id;
    die('idLinhaDoTempo:' . $_SESSION['idLinhaDoTempo']);
} catch(Exception) {
    die('Não foi possivel cadastrar o linha do tempo. str sql: ' . $str_sql_cadastrar_linha_do_tempo);
}
?>