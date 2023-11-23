<?php
    session_start();
    $login_incorreto = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_SESSION["usuarios"])){
            foreach($_SESSION["usuarios"] as $credencial){
                if($_POST["nome"] == $credencial["nome"] && $_POST["senha"] == $credencial["senha"]){
                    $_SESSION["nomeLogado"] = $credencial["nome"];
                    $_SERVER["REQUEST_METHOD"] = "GET";
                    $_SESSION["logou"] = true;
                    header("Location: pages/tela-principal.php");
                    exit(); 
                }else{
                    $login_incorreto = true;
                }
            }
        }else{
            $login_incorreto = true;
        }
    } 
?>