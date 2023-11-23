<?php
    session_start();    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_SESSION["usuarios"])){
            foreach($_SESSION["usuarios"] as $credencial){
                if($_POST["nome-cadastro"] == $credencial["nome"] || $_POST["email-cadastro"] == $credencial["email"]){
                    echo '<p class="cadastro-erro-texto">Nome ou email já cadastrado</p>';
                    exit();
                }else{
                    array_push($_SESSION["usuarios"], [
                        "nome" => $_POST["nome-cadastro"],
                        "email" => $_POST["email-cadastro"],
                        "senha" => $_POST["senha-cadastro"]
                    ]);
                    header("Location: ../index.php");
                    exit();
                }
            }
        }else{
            $_SESSION["usuarios"] = [];
            array_push($_SESSION["usuarios"], [
                "nome" => $_POST["nome-cadastro"],
                "email" => $_POST["email-cadastro"],
                "senha" => $_POST["senha-cadastro"]
            ]);
            header("Location: ../index.php");
            exit();
        }
    }
?>