<?php
session_start();
include("conexao.php");

global $conexao;
global $db;

        $nome =  $_POST['nomeCompletoPais'];
        $documento =  $_POST['documentoPais'];
        $apelido =  $_POST['apelidoPais'];
        $idadePais =  $_POST['idadePais'];
        $dataNasc =  $_POST['nascimentoPais'];
        $idadeFilho =  $_POST['idadeFilho'];
        $atividade =  $_POST['atividadePais'];
        $dirigirPais =  $_POST['dirigirPais'];
        $dormiPais =  $_POST['dormirPais'];
        $semanaPais =  $_POST['semanaPais'];
        $nomeMae =  $_POST['nomeMae'];
        $cep =  $_POST['cepPais'];
        $cidade =  $_POST['cidadePais'];
        $endereco =  $_POST['enderecoPais'];
        $bairro =  $_POST['bairroPais'];
        $numeroEndereco =  $_POST['numeroEnderecoPais'];
        $complemento =  $_POST['complemento'];
        $email =  $_POST['emailPais'];
        $senha =  md5($_POST['senhaPais']);
        $link =  $_POST['link'];

        mysqli_select_db($conexao,$db);

        $dado = "INSERT INTO cadastro_responsavel(nome,documento,apelido,idade,nascimento,idadeFilho,atividade,dirigir,dormiPais,semana,nomeMae,cep,cidade,endereco,bairro,numero,complemento,link,email,senha) VALUES ('$nome','$documento','$apelido','$idadePais', '$dataNasc', '$idadeFilho', '$atividade','$dirigirPais','$dormiPais','$semanaPais', '$nomeMae','$cep','$cidade','$endereco','$bairro','$numeroEndereco','$complemento','$link','$email','$senha')";

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

