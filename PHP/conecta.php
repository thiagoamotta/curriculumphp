<?php
    // Passo 1 abrir conexão
    $conecta = mysqli_connect ("localhost","root","","mydb_curriculum");

//Passo 2 testar conexão
    if (mysqli_connect_errno()) {
        die("conexão falhou: ".(mysqli_connect_errno()));
        
    }
?>