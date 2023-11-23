<?php
    session_start();
    unset($_SESSION['alunos']);
    $_SESSION["logou"] = false;
    header("Location: ../index.php");
    exit(); 
?>