<?php 
    session_start();  
    if($_SESSION["logou"] != true){
        header("Location: ../index.php");
    }
    $nomeUsuario = $_SESSION['nomeLogado'];
    $nomeFormatado = ucfirst(strtolower($nomeUsuario));
    echo "<h1>Olá $nomeFormatado</h1>";
?>