<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_SESSION["alunos"])){
            foreach($_SESSION["alunos"] as $credencial){
                if($_POST["matricula-cadastro-aluno"] == $credencial["matricula"]){
                    echo "<script> alert('Matricula já cadastrada!'); </script>";
                    exit();
                }else{
                    $n1 = $_POST["nota-cadastro-um"];
                    $n2 = $_POST["nota-cadastro-dois"];
                    $media = (($n1 + $n2)/2);
                    array_push($_SESSION["alunos"], [
                        "nome" => $_POST["nome-cadastro-aluno"],
                        "matricula" => $_POST["matricula-cadastro-aluno"],
                        "primeiraNota" => $_POST["nota-cadastro-um"],
                        "SegundaNota" => $_POST["nota-cadastro-dois"],
                        "media" => $media
                    ]);
                    exit();
                }

            }
        }else{
            $_SESSION["alunos"] = [];
            $n1 = $_POST["nota-cadastro-um"];
            $n2 = $_POST["nota-cadastro-dois"];
            $media = (($n1 + $n2)/2);
            array_push($_SESSION["alunos"], [
                "nome" => $_POST["nome-cadastro-aluno"],
                "matricula" => $_POST["matricula-cadastro-aluno"],
                "primeiraNota" => $_POST["nota-cadastro-um"],
                "SegundaNota" => $_POST["nota-cadastro-dois"],
                "media" => $media
            ]);
        }
    }
?>