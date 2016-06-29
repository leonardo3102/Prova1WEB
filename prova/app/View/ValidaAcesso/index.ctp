


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Acesso ao sistema</title>
    </head>
</html>
<?php

    //Acesso ao BadFunctionCallException
    require_once 'ConnectionMySQL/Connection.php';

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Acesso ao Banco de dados
    // -- variaveis de conexao
    $db_server = "localhost";
    $db_username = "sisanalise";
    $db_password = "123456";
    $db_base = "analise";

    $sql = "SELECT * FROM pacientes ".
            "WHERE login = '".$login."'".
            "AND senha = '".$senha."'";

    //echo $sql;

    $conexao = new Connection();
    $resultado = $conexao->execute($sql);

    if($resultado->num_rows == 0){
        echo "Usuário e/ou senha inválidos!";
        header("Location: login.php?erro=1");
    }else{
        header("Location: http://localhost/prova/menu?login=" . $login);

        echo "Acesso realizado com sucesso!</br>";

        //criando cookie. Perssistência
        session_start();

        echo"Sessão: ".session_id();
        echo"<br>Nome: ".session_name();

        $_SESSION['login'] = $login;
        $_SESSION['codigo'] = 9876;
        $_SESSION['analise'] = 2;

        echo '<a href="http://localhost/prova/menu">Menu</a>';
    }

    die();

    //Retornar
 ?>
