<?php
session_start();
include("conexao.php");

global $conexao;
global $db;


$nome =  $_POST['nomeCompletoBaba'];
$documento =  $_POST['documentoBaba'];
$apelido =  $_POST['apelidoBaba'];
$idadeBaba =  $_POST['idadeBaba'];
$dataNasc =  $_POST['nascimentoBaba'];
$idadeFilho =  $_POST['idadeFilho'];
$atividade =  $_POST['atividadeBaba'];
$dirigirBaba =  $_POST['dirigirBaba'];
$dormiBaba =  $_POST['dormirBaba'];
$semanaBaba =  $_POST['semanaBaba'];
$nomeMae =  $_POST['nomeMae'];
$cep =  $_POST['cepBaba'];
$cidade =  $_POST['cidadeBaba'];
$endereco =  $_POST['enderecoBaba'];
$bairro =  $_POST['bairroBaba'];
$numeroEndereco =  $_POST['numeroEnderecoBaba'];
$complemento =  $_POST['complemento'];
$email =  $_POST['emailBaba'];
$senha =  md5($_POST['senhaBaba']);
$link =  $_POST['link'];

mysqli_select_db($conexao,$db);

$dado = "INSERT INTO cadastro_baba(nome,documento,apelido,idade,nascimento,idadeFilho,atividade,dirigir,dormiBaba,semana,nomeMae,cep,cidade,endereco,bairro,numero,complemento,link,email,senha) VALUES ('$nome','$documento','$apelido','$idadeBaba', '$dataNasc', '$idadeFilho', '$atividade','$dirigirBaba','$dormiBaba','$semanaBaba', '$nomeMae','$cep','$cidade','$endereco','$bairro','$numeroEndereco','$complemento','$link','$email','$senha')";

    if (mysqli_query($conexao, $dado)) {
    $_SESSION['documento'] = $documento;
    echo "<script>location.href='../logado/principal.php'</script>";
    exit;

    }else{
    echo "Deu errro: " . mysqli_error($conexao);
    exit;
    }

mysqli_close($conexao);
?>

