<?php

include("connect.php");
session_start();

$id=mysqli_real_escape_string($con, $_POST["id"]);
$nome=mysqli_real_escape_string($con, $_POST["nome"]);
$idade=mysqli_real_escape_string($con, $_POST["idade"]);
$doença= mysqli_real_escape_string($con, $_POST["doença"]);
$fone=mysqli_real_escape_string($con, $_POST["fone"]);
$email=mysqli_real_escape_string($con, $_POST["email"]);
$senha= mysqli_real_escape_string($con, $_POST["senha"]);
$cpf=mysqli_real_escape_string($con, $_POST["cpf"]);
$rg=mysqli_real_escape_string($con, $_POST["rg"]);


$query_insert = "insert into cadastro values (null, '{$nome}',{$idade},'{$doença}','{$fone}','{$email}','{$senha}','{$cpf}', '{$rg}');";

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



?>
