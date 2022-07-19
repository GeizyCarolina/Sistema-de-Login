<?php

require('conexao/conexao.php');



    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(isset($_POST['email']) || isset($_POST['senha'])){

        if( $_POST['email'] === "" || $_POST['senha'] === ""){
            echo '<div class="alert alert-danger>Preencha todos os campos</div>';

        }else{
            $sql = " SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
            $result = $pdo->query($sql);
            $result->execute();
            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        
            foreach ($rows as $row){
        
                if($result->rowCount() >= 1){
                    header('Location:pag-inicial.php?nome='.$row['nome']);
                }else{
                    echo 'Email ou Senha Invalidos';
                } 
            }
        }

       

    }


        
?>