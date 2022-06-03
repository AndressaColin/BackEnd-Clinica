
<?php
include(verificacao.php);
session_start();


if ($_SESSION['funcao'] != 'adm'){
    header("location: index.php");
    exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

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

<form method="post" action="action_clientes.php">
<div>
        <h1>Cadastro Paciente</h1>

        <input type="text" name="nome" placeholder="Nome*">
        <br><br>

        <input type="password" name="senha" placeholder="Senha">
        <br><br>

        <input type="date" name="idade">
        <br><br>

        <input type="text" name="doenca" placeholder="Doença ou sintomas*">
        <br><br>

        <input type="text" name="fone" placeholder="telefone">
        <br><br>

        <input type="email" name="email" placeholder="e-mail*">
        <br><br>

        <input type="text" name="cpf" placeholder="CPF*">
        <br><br>

        <input type="text" name="rg" placeholder="RG">
        <br><br>


        <input type="submit" name="submit" class="btn btn-info btn-md" value="Cadastrar"> 
        <br>
        <br>
        <a href="logout.php">Sair</a><br/>
    </div>
    </form>
    
</body>
</html>