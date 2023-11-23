<?php
    session_start();    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_SESSION["alunos"])){
            foreach($_SESSION["alunos"] as $credencial){
                if($_POST["encontrar-aluno"] == $credencial["matricula"] || $_POST["encontrar-aluno"] == $credencial["nome"]){
                    ##Estrutura basica para apresentar o aluno encontrado.
                    echo '<table class="tabela-pesquisa-aluno">';
                    echo '<thead><tr>';
                    echo '<th colspan="5" class="titulo-tabela-alunos">Aluno encontrado</th>';
                    echo '</tr></thead>';
                    ##Estrutura de apresentacao
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td>Nome</td>';
                    echo '<td>Matricula</td>';
                    echo '<td>Primeira Nota</td>';
                    echo '<td>Segunda Nota</td>';
                    echo '<td>Média</td>';
                    echo '</tr>';
                    ##Dados do aluno encontrado
                    echo '<tr>';
                    echo '<td>' . $credencial["nome"] . '</td>';
                    echo '<td>' . $credencial["matricula"] . '</td>';
                    echo '<td>' . $credencial["primeiraNota"] . '</td>';
                    echo '<td>' . $credencial["SegundaNota"] . '</td>';
                    echo '<td>' . $credencial["media"] . '</td>';
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</table>';
                }else{
                    #Não encontrado
                    echo '<p class="erro-ao-procurar">Aluno não encontrado, por favor verifique os dados e tente novamente.</p>';
                }
            }

        }else{
            ##Não há alunos cadastrados
            echo '<p class="erro-ao-procurar">Não há alunos cadastrados!</p>';
        }
    }
?>

