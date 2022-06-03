(Você esta na página RELATÓRIO)
<?php
session_start();
include("verificacao.php");

if ($_SESSION['funcao'] != 'user'){
        header("location: mostra_clientes.php");
        exit();
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de cadastro</title>
    <link href="style.user.css" rel="stylesheet" id="bootstrap-css">


</head>
<body>
<style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, rgb(238, 238, 226));
        }
        div{
            background-color: #00BFFF;
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        input [type=submit]{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        input [type=submit]:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>

<h5><?php
echo "Usuário = ".$_SESSION['nome']."<br>";
echo "Função = ".$_SESSION['funcao']."<br>";
?></h5>



                         

</form>

<a href="mostra_clientes.php"><h3><center>BUSCAR RELATÓRIO<center><h3></a><br/>
<a href="logout.php">Sair</a><br/>

        </body>
</html>