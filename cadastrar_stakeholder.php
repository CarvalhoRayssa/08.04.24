<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeStakeHolder = $_POST['txtNomeStakeHolder']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoStakeHolder = $_POST['txtDescriçãoStakeHolder']; //(=) atribuição

$str_sql_cadastrar_stake_holder = "insert into `stake holder` (`nome`,`descricao`) values
('$txtNomeStakeHolder','$txtDescricaoStakeHolder');";

try {
    $cadastrar_stake_holder = mysqli_query($conexao, $str_sql_cadastrar_stake_holder);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idStakeHolder'] = $ultimo_id;
    die('idStakeHolder:' . $_SESSION['idStakeHolder']);
} catch(Exception) {
    die('Não foi possivel cadastrar o stake holder. str sql: ' . $str_sql_cadastrar_stake_holder);
}
?>