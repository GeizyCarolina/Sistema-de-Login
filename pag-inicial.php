<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Jquery ajax -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integridade="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"> </script>

  <!-- CSS -->
  <!-- 
    <link rel="stylesheet" href="css/style.css"> -->
  <title>Sistema de Login</title>

</head>

<body>

  <?php

    include('conexao/conexao.php');

    $nome = $_GET['nome'];

    $sql = "SELECT * FROM usuarios Where nome = '$nome'";
    $result = $pdo->query($sql);
    $result->execute();
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
      extract($row);
    }

  ?>
  <h1 style="color=black;"> Bem vindo ! <?php echo $nome ?></h1>

</body>

</html>