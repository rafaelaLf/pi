<?php
session_start();
include_once("conexao.php");
global $conexao;

    $input = $_POST['inputLogin'];

if($input == 'pai') {

    if (empty($_POST['documentoLogin']) || empty($_POST['senhaLogin'])) {
        header('Location: login.php');
        exit();
    }

    $documento = mysqli_real_escape_string($conexao, $_POST['documentoLogin']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senhaLogin']);

    $query = "select documento from cadastro_responsavel where documento = '{$documento}' and senha = md5('{$senha}')";

    $result = mysqli_query($conexao, $query);

    $row = mysqli_num_rows($result);

    if ($row == 1) {
        $_SESSION['documento'] = $documento;
        header('Location: ../logado/principal.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: login.php');
        exit();
    }
}else if($input == 'baba'){

        if(empty($_POST['documentoLogin']) || empty($_POST['senhaLogin'])) {
            header('Location: login.php');
            exit();
        }

        $documento = mysqli_real_escape_string($conexao, $_POST['documentoLogin']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senhaLogin']);

        $query = "select documento from cadastro_baba where documento = '{$documento}' and senha = md5('{$senha}')";

        $result = mysqli_query($conexao, $query);

        $row = mysqli_num_rows($result);

        if($row == 1) {
            $_SESSION['documento'] = $documento;
            header('Location: ../logado/principal.php');
            exit();
        } else {
            $_SESSION['nao_autenticado'] = true;
            header('Location: login.php');
            exit();
        }
}
?>
