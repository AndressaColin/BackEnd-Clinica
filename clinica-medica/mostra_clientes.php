<?php

include("connect.php");
include("verificacao.php");
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios</title>
    </html><link href="style.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
    
<?php
$query = "select * from cadastro order by Nome asc";
$result= mysqli_query($con, $query); 
$retorno = mysqli_fetch_array($result); 
$row = mysqli_num_rows($result); 

if ($row == ''){
    echo "<h3>Não existem dados cadastrados</h3>";
   

}else{

?>
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

<h2><center>Relatório de Clientes<center></h2><br/>
<br>
<table border="2" align="center">
<tr>
        <td>Id</td>
        <td><center>Nome<center></td>
        <td>idade</td>
        <td>doença</td>
        <td>Fone</td>
        <td>email</td>
        <td>senha</td>
        <td>cpf</td>
        <td>rg</td>
</tr>
        <?php
        while($data=mysqli_fetch_array($result)){
            $id = $data['id'];
            $Nome = $data['Nome'];
            $Idade = $data['Idade'];
            $Doença = $data['Doença'];
            $fone = $data['Fone'];
            $Email = $data['Email'];
            $senha = $data['senha'];
            $CPF = $data['CPF']; 
            $RG = $data['RG'];
        
        ?>
        

        <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $Nome; ?></td>
        <td><?php echo $Idade; ?></td>
        <td><?php echo $Doença; ?></td>
        <td><?php echo $fone; ?></td>
        <td><?php echo $Email; ?></td>
        <td><?php echo $senha; ?></td>
        <td><?php echo $CPF; ?></td>
        <td><?php echo $RG; ?></td>
    </tr>
    <?php

}?>


</table>   
<center><a href="logout.php">Sair</a><br/><center>
<?php

}?>


</body>
</html>
