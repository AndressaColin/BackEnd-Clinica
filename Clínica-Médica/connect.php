<?php
$host= "127.0.0.1";
$usuario = "root";
$senha = "";
$database = "clinica_medica";


$con = new mysqli($host, $usuario, $senha, $database);


if ($con -> connect_error){
    echo "Falha na Conexão: (".$con->connect_error.")".$con-> connect_error;
    }
    
echo $con->host_info . "\n";

?>