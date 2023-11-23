<?php 
//identificar o tamanho da lista! 
//percorrer a lista conforme seu tamanho!
//inserir dados dentro de uma lista html
    session_start();
    if(isset(($_SESSION["alunos"]))){
        criarTabela();
    }else{
        echo "<h1>Não há alunos cadastrados.</h1>";
    }


    function criarTabela(){
        $titulos = array("Nome", "Matricula",  "Nota Um", "Nota Dois", "medias");
        echo '<table class="tabela-alunos">';
        echo '<thead><tr>';
        foreach ($titulos as $tituloHead) {
            echo '<th>' . $tituloHead . '</th>';
        }
        echo '</tr></thead>';
        echo '<tbody>';
        foreach($_SESSION["alunos"] as $dadosAluno){
            //inicio do dado
            echo '<tr>';
            //nome
            echo '<td>' . $dadosAluno["nome"] . '</td>';
            echo '<td>' . $dadosAluno["matricula"] . '</td>';
            echo '<td>' . $dadosAluno["primeiraNota"] . '</td>';
            echo '<td>' . $dadosAluno["SegundaNota"] . '</td>';
            echo '<td>' . $dadosAluno["media"] . '</td>';
            //fim do dado
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    }
?>


