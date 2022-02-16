<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">

        <div class="row justify-content-center align-items-center">
            <div class="col-4">
                <!--CABEÇA DO CARD-->
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link " aria-current="true" href="login.php">Login</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" href="">Register</a>
                            </li>
                          </ul>
                    </div>
                    <!--CORPO DO CARD-->
                    <div class="card-body">

                        <form action="exibir.php" method="post">

                            <div class="form-group">
                                <label for="">Nome</label>
                                <input required type="text" class="form-control" name="nome">
                            </div>

                            <div class="form-group">
                                <label for="">Data de nascimento</label>
                                <input required type="date" class="form-control" name="data" id="data" onblur="Anos(this.value);">
                            </div>

                            <div class="form-group">
                                <label for="">Idade</label>
                                <input required type="number" class="form-control" name="idade" id="idade">
                            </div>

                            <div class="form-group">
                                <label for="">CEP</label>
                                <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Rua</label>
                                <input class="form-control" name="rua" type="text" id="rua" size="60">
                            </div>

                            <div class="form-group">
                                <label for="">Bairro</label>
                                <input class="form-control" name="bairro" type="text" id="bairro" size="40">
                            </div>

                            <div class="form-group">
                                <label for="">Cidade</label>
                                <input class="form-control" name="cidade" type="text" id="cidade" size="40">
                            </div>

                            <div class="form-group">
                                <label for="">Estado</label>
                                <input class="form-control" name="uf" type="text" id="uf" size="2">
                            </div>

                            <br>
                            <button type="submit"  class="btn btn-primary">Register</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
<script src="js/register.js"></script>
</html>
