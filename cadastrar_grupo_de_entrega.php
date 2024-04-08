<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeGrupoDeEntrega = $_POST['txtNomeGrupoDeEntrega']; // declaração de variavel em php ($) ou colocar na memória do computador  
$txtDescricaoGrupoDeEntrega = $_POST['txtDescriçãoGrupoDeEntrega']; //(=) atribuição

$str_sql_cadastrar_grupo_de_entrega = "insert into `grupo de entregas` (`nome`,`descricao`) values
('$txtNomeGrupoDeEntrega','$txtDescricaoGrupoDeEntrega');";

try {
    $cadastrar_grupo_de_entrega = mysqli_query($conexao, $str_sql_cadastrar_grupo_de_entrega);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idGrupoDeEntrega'] = $ultimo_id;
    die('idGrupoDeEntrega:' . $_SESSION['idGrupoDeEntrega']);
} catch(Exception) {
    die('Não foi possivel cadastrar o grupo de entrega. str sql: ' . $str_sql_cadastrar_grupo_de_entrega);
}
?>