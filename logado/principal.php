<?php
include_once("../cadastro/verifica_login.php");
include_once("../cadastro/conexao.php");

global $conexao;

$consulta = "SELECT * FROM cadastro_baba";
$con = mysqli_query($conexao, $consulta) or die (mysqli_error);

$resp = "SELECT * FROM cadastro_responsavel";
$conec = mysqli_query($conexao, $resp) or die (mysqli_error);

$consultaBaba = "SELECT * FROM cadastro_baba";
$totalBaba = mysqli_query($conexao, $consultaBaba) or die (mysqli_error);
$rowBaba = mysqli_num_rows($totalBaba);

$consultaRes = "SELECT * FROM cadastro_responsavel";
$totalResp = mysqli_query($conexao, $consultaRes) or die (mysqli_error);
$rowResponsavel = mysqli_num_rows($totalResp);

$rowTotal = $rowBaba + $rowResponsavel;

$cidadeBaba = "SELECT * FROM cadastro_baba where cidade = 'Blumenau'";
$babaCidade = mysqli_query($conexao, $cidadeBaba) or die (mysqli_error);
$rowCidadeBaba = mysqli_num_rows($babaCidade);

$cidadeResp = "SELECT * FROM cadastro_responsavel where cidade = 'Blumenau'";
$responsavelCidade = mysqli_query($conexao, $cidadeResp) or die (mysqli_error);
$rowResponsavel = mysqli_num_rows($responsavelCidade);

$cidadeTotal = $rowResponsavel + $rowCidadeBaba;

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Take Care - Principal</title>

    <!-- Custom fonts for this ../template-->
    <link href="../template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this ../template-->
    <link href="../template/css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-water topbar mb-4 static-top shadow">

                <h3 class="h3 mb-0 text-gray-900" style="margin-left: 680px">Take Care</h3>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">

                        <a class="nav-link dropdown-toggle" id="userDropdown" >

                            <span class="mr-2 d-none d-lg-inline text-gray-900 small"><?php echo $_SESSION['documento']; ?></span>

                        </a>

                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <li class="nav-item dropdown no-arrow">

                        <a class="nav-link dropdown-toggle" id="userDropdown" href="../cadastro/logout.php"
                           data-toggle="modal" data-target="#logoutModal">

                            <span class="mr-2 d-none d-lg-inline text-gray-900 small">Sair</span>

                        </a>

                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Content Row -->
                <div class="row">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Usu??rio Ativos</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowTotal ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Data do ??ltimo acesso</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
                                            date_default_timezone_set( 'America/Sao_Paulo' );echo date('d/m/Y ');?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Usu??rios em Blumenau
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $cidadeTotal?></div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                         style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Calend??rio</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <input type="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Row -->
                <div class="row">

                    <?php  while($dadoBaba = $con->fetch_array()){ ?>

                    <!-- Content Column -->
                    <div class="col-lg-6 mb-4">

                        <div class="card shadow mb-4">

                            <div class="card-header py-3">

                                <h6 class="m-0 font-weight-bold text-primary"><?php echo $dadoBaba["nome"] ?></h6>

                            </div>

                            <div class="card-body">

                                <div class="col-md-12 col-xs-12">

                                    <div class="form-group row">

                                        <b>Dados Pessoais</b><br><br>

                                        <div class="col-md-12 col-xs-12">

                                            <a style="margin: 15px">

                                                <b>Nome: </b>
                                                <?php echo $dadoBaba["nome"] ?>

                                            </a>

                                            <a style="margin: 15px">

                                                <b>Idade: </b>
                                                <?php echo $dadoBaba["idade"] ?>

                                            </a>

                                            <a style="margin: 15px">

                                                <b>Apelido: </b>
                                                <?php echo $dadoBaba["apelido"] ?>

                                            </a>

                                            <a style="margin: 15px">

                                                <b>Sabe dirigir: </b>
                                                <?php echo $dadoBaba["dirigir"] ?>

                                            </a>

                                        </div>
                                        <br>
                                        <div class="col-md-12 col-xs-12">

                                            <a style="margin: 15px">

                                                <b>Cidade: </b>
                                                <?php echo $dadoBaba["cidade"] ?>

                                            </a>

                                            <a style="margin: 15px">

                                                <b>Email de Contato: </b>
                                                <?php echo $dadoBaba["email"] ?>

                                            </a>

                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">

                                            <b>Informa????es</b><br><br>

                                            <div class="col-md-12 col-xs-12">

                                                <a style="margin: 15px">

                                                    <b>Pode dormir na residencia: </b>
                                                    <?php echo $dadoBaba["dormiBaba"] ?>

                                                </a>

                                                <a style="margin: 15px">

                                                    <b>Dias disponiveis: </b>
                                                    <?php echo $dadoBaba["semana"] ?>

                                                </a>

                                            </div>

                                            <div class="col-md-12 col-xs-12">

                                                <a style="margin: 15px">

                                                    <b>Atividades extra: </b>
                                                    <?php echo $dadoBaba["atividade"] ?>

                                                </a>

                                                <a style="margin: 15px">

                                                    <b>Crian??as de qual idade: </b>
                                                    <?php echo $dadoBaba["idadeFilho"] ?>

                                                </a>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <a target="_blank" rel="nofollow" href=" <?php echo $dadoBaba["link"] ?>">Acesse o perfil do linkedin &rarr;</a>
                            </div>

                        </div>

                    </div>
                    <?php  } ?>

                    <?php  while($dadoResponsavel = $conec->fetch_array()){ ?>

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <div class="card shadow mb-4">

                                <div class="card-header py-3">

                                    <h6 class="m-0 font-weight-bold text-primary"><?php echo $dadoResponsavel["nome"] ?></h6>

                                </div>

                                <div class="card-body">

                                    <div class="col-md-12 col-xs-12">

                                        <div class="form-group row">

                                            <b>Dados Pessoais</b><br><br>

                                            <div class="col-md-12 col-xs-12">

                                                <a style="margin: 15px">

                                                    <b>Nome: </b>
                                                    <?php echo $dadoResponsavel["nome"] ?>

                                                </a>

                                                <a style="margin: 15px">

                                                    <b>Idade: </b>
                                                    <?php echo $dadoResponsavel["idade"] ?>

                                                </a>

                                                <a style="margin: 15px">

                                                    <b>Necessita saber dirigir: </b>
                                                    <?php echo $dadoResponsavel["dirigir"] ?>

                                                </a>

                                            </div>
                                            <br>
                                            <div class="col-md-12 col-xs-12">

                                                <a style="margin: 15px">

                                                    <b>Cidade: </b>
                                                    <?php echo $dadoResponsavel["cidade"] ?>

                                                </a>

                                                <a style="margin: 15px">

                                                    <b>Email de Contato: </b>
                                                    <?php echo $dadoResponsavel["email"] ?>

                                                </a>

                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">

                                                <b>Informa????es</b><br><br>

                                                <div class="col-md-12 col-xs-12">

                                                    <a style="margin: 15px">

                                                        <b>Precisa dormir na residencia: </b>
                                                        <?php echo $dadoResponsavel["dormiPais"] ?>

                                                    </a>

                                                    <a style="margin: 15px">

                                                        <b>Dias desejado: </b>
                                                        <?php echo $dadoResponsavel["semana"] ?>

                                                    </a>

                                                </div>

                                                <div class="col-md-12 col-xs-12">

                                                    <a style="margin: 15px">

                                                        <b>Atividades extra: </b>
                                                        <?php echo $dadoResponsavel["atividade"] ?>

                                                    </a>

                                                    <a style="margin: 15px">

                                                        <b>Qual a idade do seu filho? </b>
                                                        <?php echo $dadoResponsavel["idadeFilho"] ?>

                                                    </a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <a target="_blank" rel="nofollow" href="<?php echo $dadoResponsavel["link"] ?>">Acesse o perfil do linkedin &rarr;</a>
                                </div>

                            </div>

                        </div>
                    <?php  } ?>

                </div>

            </div>
            <!-- /.container-fluid -->


        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-water">
            <div class="container my-auto ">
                <div class="copyright text-center my-auto">
                    <b>&copy; Rafas 2021</b>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="../template/#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>

                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">??</span>
                </button>

            </div>

            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>

            <div class="modal-footer">

                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="index.php">Logout</a>

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
<script src="../template/js/sb-admin-2.js"></script>

<!-- Page level plugins -->
<script src="../template/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="../template/js/demo/chart-area-demo.js"></script>
<script src="../template/js/demo/chart-pie-demo.js"></script>

</body>

</html>