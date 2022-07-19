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
        <div id="resp1"></div>
        <div class="box-cad">

            <div class="title">
                <h4>Cadastrar</h4>
            </div>
            <div class="content-cad">
                <form method="post" action="insert-cadastro.php" id="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="email" class="form-control form-control-sm" name="nome" id="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control form-control-sm" name="senha" id="senha" placeholder="Digite sua senha">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Repetir Senha</label>
                        <input type="password" class="form-control form-control-sm" name="senha1" id="senha1" placeholder="Digite sua senha">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="check" value="ok" name="check" checked="checked">
                        <small class="form-check-label" for="exampleCheck1">Concordo com os Termos <a href="">Politica de Privacidade</a></small>
                    </div>

                    <input type="button" class="btn btn-primary w-100 mt-2" id="btn-cadastro" value="Cadastrar">

                    <div id="resp"></div>

                    <small>Já possui uma conta ?<a href="index.php"> Login</a></small>
                </form>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $("#btn-cadastro").on("click", function(event) {

            event.preventDefault();

            let txt_nome = $('#nome').val();
            let txt_email = $('#email').val();
            let txt_senha = $('#senha').val();
            let txt_senha1 = $('#senha1').val();
            let check = $('#check').val();


            let resposta = document.getElementById('resp');

            if (txt_nome == "" || txt_email == "" || txt_senha == "" || txt_senha1 == "") {

                resposta.innerText = "Preencha todos os campos";
                resposta.style.color = "red";
                resposta.style.fontSize = "15px";


            } else if (txt_senha != txt_senha1) {

                resposta.innerText = "Senhas Divergentes";
                resposta.style.color = "red";
                resposta.style.fontSize = "15px";

            } else {

                $.ajax({

                    type: "post",
                    url: "insert-cadastro.php",
                    data: {

                        nome: txt_nome,
                        email: txt_email,
                        senha: txt_senha,
                        senha1: txt_senha1,

                    }, success: function(msg) {

                        if (msg === 'Usuário Cadastrado com Sucesso') {
                            $('#form').trigger('reset');
                            resposta.innerText = "";
                            $('#resp1').addClass('alert alert-success');
                            $('#resp1').fadeIn().html(msg);
                            setTimeout(function() {
                                $('#resp1').fadeOut('slow');
                                window.location.href = 'index.php';
                            }, 3000);
                        }else if(msg === 'Email já Cadastrado'){
                            resposta.innerText = "";
                            $('#resp1').addClass('alert alert-danger');
                            $('#resp1').html(msg);
                        }

                    }
                });
            }

        });
    </script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>