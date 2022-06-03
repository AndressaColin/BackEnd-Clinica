<?php

include("connect.php");
session_start();


$nome=mysqli_real_escape_string($con, $_POST["nome"]);
$idade=mysqli_real_escape_string($con, $_POST["idade"]);
$doenca= mysqli_real_escape_string($con, $_POST["doenca"]);
$fone=mysqli_real_escape_string($con, $_POST["fone"]);
$email=mysqli_real_escape_string($con, $_POST["email"]);
$senha= mysqli_real_escape_string($con, $_POST["senha"]);
$cpf=mysqli_real_escape_string($con, $_POST["cpf"]);
$rg=mysqli_real_escape_string($con, $_POST["rg"]);

$query_insert = "insert into cadastro values (null, '{$nome}',{$idade},'{$doenca}','{$fone}','{$email}','{$senha}','{$cpf}', '{$rg}');";

$result_insert= mysqli_query($con, $query_insert);

    if ($result_insert == ''){
    echo "<script language:'javascript'> window.alert('Não foi possível efetuar o cadastro'); windows.location.href='user.php';</script>";
    exit();
} else
{
    echo "<script language:'javascript'> window.alert('Cadastro efetuado com sucesso'); window.location.href='user.php';</script>";
    exit();
}
?>




