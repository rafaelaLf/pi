<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Take Care - Login</title>

    <!-- Custom fonts for this template-->
    <link href="../template/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="template/text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../template/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">

                                <div class="text-center">
                                    <h2 class="h4 text-gray-900 mb-4">Seja bem vindo de volta!</h2>
                                </div>

                                <form class="user" action="consulta.php" method="post">

                                    <?php if(isset($_SESSION['nao_autenticado'])):?>
                                        <p class="btn btn-icon-split" style="text-align: center" >
                                            <a class="icon text-white-50" style="background-color: #f3432f">
                                                ERRO: Usuário ou senha inválido!
                                            </a>
                                        </p>
                                    <br>

                                    <?php
                                    endif;
                                    unset($_SESSION['nao_autenticado']);
                                    ?>
                                    <div class="form-group">

                                        <input type="text" class="form-control form-control-user"
                                               id="documentoLogin"placeholder="CPF" name="documentoLogin" required>

                                    </div>

                                    <div class="form-group">

                                        <input type="password" class="form-control form-control-user"
                                               id="senhaLogin" placeholder="Senha" name="senhaLogin" required>
                                    </div>

                                    <label>Selecione seu usuario:</label><br>

                                    <input type="radio" name="inputLogin" value="baba" required> Babá<br>

                                    <input type="radio" name="inputLogin" value="pai" required> Responsável
                                    <br>
                                    <br>

                                    <button type="submit" class="btn btn-primary btn-user btn-block" name="login">
                                        Login
                                    </button>

                                    <hr>

                                </form>

                                <div class="text-center">
                                    <a class="small" href="senha.php">Esqueceu a senha?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="cadastro.php">Crie sua conta!</a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="../template/vendor/jquery/jquery.min.js"></script>
<script src="../template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../template/js/sb-admin-2.min.js"></script>

</body>

</html>