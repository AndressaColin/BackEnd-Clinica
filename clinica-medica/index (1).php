<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
    

    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("imagem.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            
            
            
        }
        div{
            background-color: #00CED1;
            position: absolute;
            top: 50%;
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
    <?php
                session_start();
                if(isset($_SESSION["nao_autenticado"])): ?>
                <p> Usuário ou senha inválidos!</p>
                <?php
                endif;
                unset($_SESSION["nao_autenticado"]); ?>
</head>
<body>
    <form method="post" action="action.php">
        <div>
        <h1>CLÍNICA MÉDICA</h1>
        <h3>FAÇA SEU LOGIN</h3>
        <input type="text" name="nome" placeholder="Nome">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input type="submit" name="submit" class="btn btn-info btn-md" value="Entrar"> 
    </div>
</body>
</html>