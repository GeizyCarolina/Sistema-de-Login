<?php

require('conexao/conexao.php');


    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $sql = "SELECT nome, email, senha FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $pdo->query($sql);
    $result->execute();
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row){
        extract($row);
        echo $nome;
    }
    
        
  

   
    
 

?>