<?php  
/**
 * Conecta com o MySQL usando PDO
 */
function db_connect()
{
    $PDO = new PDO('mysql:host=' . CELKE_DB_HOST . ';dbname=' . CELKE_DB_NAME . ';charset=utf8', CELKE_DB_USER, CELKE_DB_PASS);
  
    return $PDO;
}

function envia_banco($pdo, $nome, $email, $telefone, $mensagem){
    $sql  = " INSERT INTO contato set ";
    $sql .= " nome = :nome ";
    $sql .= " ,email = :email ";
    $sql .= " ,telefone = :telefone ";
    $sql .= " ,mensagem = :mensagem ";

    // $sql  = " INSERT INTO contato set ";
    // $sql .= " nome = '".$nome."'";
    // $sql .= " ,email = '".$email."'";
    // $sql .= " ,telefone = '".$telefone."'";
    // $sql .= " ,mensagem = '". $mensagem."'";

    // echo $sql;

    $sth = $pdo->prepare($sql);
    $sth->bindParam(':nome', $nome, PDO::PARAM_STR);
    $sth->bindParam(':email', $email, PDO::PARAM_STR);
    $sth->bindParam(':telefone', $telefone, PDO::PARAM_STR);
    $sth->bindParam(':mensagem', $mensagem, PDO::PARAM_STR);

    $res = $sth->execute();
}