<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <br>
    <div class="container">

        <div class="card">
            <div class="card-header">
                Dados Recebidos 
            </div>
            <div class="card-body">

                <?php

                    if(isset($_POST['email'])) {

                        $conteudo = "Email: " . $_POST['email'] . "<br>Senha: " . $_POST['senha'];
                        echo $conteudo;
                    }
                    
                    if(isset($_POST['nome'])){
                        $conteudo = "Nome: " . $_POST['nome'] . "<br>Data: " . $_POST['data'] . "<br>Idade: " . $_POST['idade'] . "<br>CEP: "
                         . $_POST['cep'] . "<br>Rua: " . $_POST['rua'] . "<br>Bairro: " . $_POST['bairro'] . "<br>Cidade: " . $_POST['cidade']
                         . "<br>Estado: " . $_POST['uf'];
                        echo $conteudo;
                    }
                   
                ?>

            </div>
        </div>

    </div>

</body>
<script src="js/bootstrap.min.js"></script>
</html>