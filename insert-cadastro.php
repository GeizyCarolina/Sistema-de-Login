<?php

require('conexao/conexao.php');


if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['senha1'])){
  
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha1 = $_POST['senha1'];
 

    $sql = "SELECT id, nome, email, senha FROM usuarios WHERE email = '$email' ";
    $result = $pdo->query($sql);
    $result->execute();
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    if($result->rowCount() >= 1){
        echo 'Email já Cadastrado';
        
    }else{
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $result = $pdo->prepare($sql);
        $result->bindParam(':nome', $_POST['nome']);
        $result->bindParam(':email', $_POST['email']);
        $result->bindParam(':senha', $_POST['senha']);
        $result->execute();

        echo 'Usuário Cadastrado com Sucesso';
    }

       


       
    
}else{

    exit();
} 

   
/*  */



?>