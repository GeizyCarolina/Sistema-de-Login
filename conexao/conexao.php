<?php 


$host = "localhost";
$user = "root";
$password = "";
$data_base = "sistema_login";


try {
    
    $pdo = new PDO("mysql:dbname=$data_base; host=$host; charset=utf8", "$user", "$password");

} catch (\Throwable $e) {
    
    echo "Error ao conectar com o dataBase";
}



?>