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
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de Login</title>


</head>

<body style="background-image: url('img/capa.jpg'); opacity:0.8">

    <section>
        <div class="box-login">
            <div class="title">
                <h4>Login</h4>
            </div>
            <div class="content-login">
                <form method="post" action="login.php">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha" id="name" placeholder="Digite sua senha">
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-2" id="btn-entrar">Logar</button>

                    <div id="resposta"></div>
                    <small>Não possui uma conta ?<a href="cadastro.php"> Cadastre-se</a></small>
                </form>
            </div>
        </div>
    </section>

    <!-- <script type="text/javascript">

        $("#btn-entrar").on("click", function(event) {

            event.preventDefault();

            let txt_email = $('#email').val();
            let txt_senha = $('#senha').val();

            let resp = document.getElementById('resposta');

            if(txt_email == "" || txt_senha == "") {

                resp.innerHTML = "Preecha todos os campos";
                resp.style.fontSize = "14px";
                resp.style.color = "red";

            } else {

                $.ajax({

                    type: 'post',
                    url: 'login.php',               
                    data: {

                        email: txt_email,
                        senha: txt_senha
                    },
                    success: function(e) {
                       
                    }

                })
            }

        });
    </script>
 -->

    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>