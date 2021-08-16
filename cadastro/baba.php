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

    <title>Take Care - Cadastro Baba</title>
    <!-- Custom fonts for this template-->
    <link href="../template/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../template/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">

        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-5 d-none d-lg-block bg-register-image-baba"></div>

                <div class="col-lg-7">

                    <div class="p-5">

                        <div class="text-center">
                            <h4 class="h4 text-gray-900 mb-4">Olá babá! se cadastre agora mesmo</h4>
                        </div>

                        <form class="user" action="dadoBaba.php" method="post">

                            <div class="form-group row">

                                <div class="col-md-6 col-xs-12">

                                    <input type="text" class="form-control form-control-user" id="nomeCompletoBaba"
                                           name="nomeCompletoBaba"  placeholder="Nome Completo" required>
                                </div>

                                <div class="col-md-6 col-xs-12">

                                    <input type="text" class="form-control form-control-user" id="documentoBaba"
                                           name="documentoBaba" placeholder="CPF" required>
                                </div>

                            </div>

                            <div class="form-group row">

                                <div class="col-md-4 col-xs-12">

                                    <input type="text" class="form-control form-control-user" id="apelidoBaba" name="apelidoBaba"
                                           placeholder="Apelido" required>

                                </div>

                                <div class="col-md-4 col-xs-12">

                                    <input type="text" class="form-control form-control-user" id="idadeBaba" name="idadeBaba"
                                           placeholder="Idade" required>

                                </div>

                                <div class="col-md-4 col-xs-12">

                                    <input type="date" class="form-control form-control-user" id="nascimentoBaba" name="nascimentoBaba" required>
                                </div>

                            </div>

                            <div class="form-group row">

                                <div class="col-md-6 col-xs-12">

                                    <input type="text" class="form-control form-control-user" id="idadeFilho" name="idadeFilho"
                                           placeholder="Crianças de qual idade?" required>

                                </div>

                                <div class="col-md-6 col-xs-12">

                                    <input type="text" class="form-control form-control-user" id="atividadeBaba" name="atividadeBaba"
                                           placeholder="Atividade a oferecer? ex:?ingles, mat" required>

                                </div>

                            </div>

                            <div class="form-group row">

                                <div class="col-md-6 col-xs-12">

                                    <input type="text" class="form-control form-control-user" id="dirigirBaba" name="dirigirBaba"
                                           placeholder="Possui habilitação?" required>

                                </div>

                                <div class="col-md-6 col-xs-12">

                                    <input type="text" class="form-control form-control-user" id="dormirBaba" name="dormirBaba"
                                           placeholder="Pode dormir na casa?" required>

                                </div>

                            </div>

                            <div class="form-group row">

                                <div class="col-md-6 col-xs-12">

                                    <input type="text" class="form-control form-control-user" id="semanaBaba" name="semanaBaba"
                                           placeholder="Dias disponiveis ex: dom,seg,ter" required>
                                </div>

                                <div class="col-md-6 col-xs-12">
                                    <input type="text" class="form-control form-control-user" id="nomeMae" name="nomeMae"
                                           placeholder="Qual o nome da sua mãe?" required>
                                </div>

                            </div>

                            <div class="form-group row">

                                <div class="col-md-4 col-xs-12">
                                    <input type="text" class="form-control  form-control-user" id="cepBaba" name="cepBaba"
                                           placeholder="CEP" required>
                                </div>

                                <div class="col-md-4 col-xs-12">

                                    <input type="text" class="form-control form-control-user" id="cidadeBaba" name="cidadeBaba"
                                           placeholder="Cidade" required>
                                </div>

                                <div class="col-md-4 col-xs-12">
                                    <input type="text" class="form-control form-control-user" id="enderecoBaba" name="enderecoBaba"
                                           placeholder="Endereço" required>
                                </div>


                            </div>

                            <div class="form-group row">

                                <div class="col-md-4 col-xs-12">
                                    <input type="text" class="form-control form-control-user" id="bairroBaba" name="bairroBaba"
                                           placeholder="Bairro" required>
                                </div>

                                <div class="col-md-4 col-xs-12">

                                    <input type="text" class="form-control form-control-user" id="numeroEnderecoBaba" name="numeroEnderecoBaba"
                                           placeholder="Número" required>
                                </div>

                                <div class="col-md-4 col-xs-12">
                                    <input type="text" class="form-control form-control-user" id="complemento" name="complemento"
                                           placeholder="Complemento">
                                </div>


                            </div>

                            <div class="form-group row">

                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control form-control-user" id="link" name="link"
                                           placeholder="Insira o link do seu perfil no linkedin" required>
                                </div>

                            </div>

                            <div class="form-group">

                                <input type="email" class="form-control form-control-user" id="emailBaba" name="emailBaba"
                                       placeholder="E-mail" required>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12 col-xs-12">

                                    <input type="password" class="form-control form-control-user"
                                           id="senhaBaba" name="senhaBaba" placeholder="Senha" required>
                                </div>

                            </div>

                            <button type="submit" name="baba" value="1" href="verifica_login.php" id="submit" class="btn btn-primary btn-user btn-block">
                                Criar Conta
                            </button>

                            <hr>

                        </form>

                        <hr>

                        <div class="text-center">

                            <a class="small" href="login.php">Já possui uma conta? Faça login!</a>

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
<script src="../template/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../template/js/sb-admin-2.min.js"></script>

</body>

</html>