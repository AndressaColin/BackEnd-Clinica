<?php
//Arquivo de Login ao sistema
session_start();
include("connect.php");

if (empty ($_POST["nome"]) || empty ($_POST["senha"])){
    header ("location: index.php");
    } 
    
$nome = mysqli_real_escape_string($con, $_POST["nome"]);
$senha = mysqli_real_escape_string($con, $_POST["senha"]);

//$nome = ($_POST["nome"]);
//$senha = ($_POST["senha"]);

//$query = "insert into user valuese = '{$nome}' and senha = '{$senha}'";
$query = "select * from gerentes where nome = '{$nome}' and senha = '{$senha}'";

$result= mysqli_query($con, $query); //Recebe a conexão mais a query 

$row = mysqli_num_rows($result); //Atribui a qtde de linhas resultantes a variável row
$retorno = mysqli_fetch_array($result); // Retorna os dados da pesquisa em um array

if ($row > 0){
    $_SESSION['nome'] = $nome;
    $_SESSION['funcao'] = $retorno['funcao'];

if ($_SESSION['funcao'] == 'adm'){
    header("location: gerentes.php");
    exit();
    }

if ($_SESSION['funcao'] == 'user'){
    header('location: clientes.php');
    exit();    
}

//header('location: user.php');

exit();
}

else {
    $_SESSION["nao_autenticado"] = true;
    header("location: index.php");
   exit();
    //Função segura para não permitir burlar o sistema
}
?>