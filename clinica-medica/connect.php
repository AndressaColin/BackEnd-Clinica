<?php
$host= "192.168.22.147";
$usuario = "ederson";
$senha = "Suporte@10";
$database = "clinica_medica";


$con = new mysqli($host, $usuario, $senha, $database);


if ($con -> connect_error){
    echo "Falha na Conexão: (".$con->connect_error.")".$con-> connect_error;
    }
    
echo $con->host_info . "\n";

?>