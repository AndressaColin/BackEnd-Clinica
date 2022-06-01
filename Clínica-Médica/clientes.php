vc está na página do cliente-relatorio
<?php
session_start();
include("verificacao.php");

if ($_SESSION['funcao'] != 'user'){
        header("location: index.php");
        exit();
        }

?>
