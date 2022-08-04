
<?php
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email == "admin@email.com" && $senha == "123456"){
        echo "<h1>Seja bem vindo! Email e senha corretos.";
    }else{
        echo "ERRO: <strong>email ou senha incorreto, Tente novamente!</strong>";
    }

?>