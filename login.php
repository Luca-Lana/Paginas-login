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
    
    <div class="container">

        <div class="row justify-content-center align-items-center">
            <div class="col-4">
                <!--CABEÇA DO CARD-->
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="true" href="">Login</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="register.php">Register</a>
                            </li>
                          </ul>
                    </div>
                    <!--CORPO DO CARD-->
                    <div class="card-body">

                        <form action="exibir.php" method="post">

                            <div class="form-group">
                                <label for="">Email</label>
                                <input required type="email" class="form-control" name="email">
                            </div>

                            <div class="form-group">
                                <label for="">Senha</label>
                                <input required type="password" class="form-control" name="senha">
                            </div>

                            <br>
                            <button type="submit"  class="btn btn-primary">Login</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
<script src="js/bootstrap.min.js"></script>
</html>