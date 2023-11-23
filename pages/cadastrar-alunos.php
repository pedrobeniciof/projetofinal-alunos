<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema escolar - Cadastro do aluno</title>
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/btn.css">
    <link rel="stylesheet" href="../styles/cadastrar-alunos.css">
</head>
<body>
    <header>
        <div class="nav-main">
        <div class="header-left">
                <!-- Script PHP para o tela inicial logado -->
                <?php
                require '../scripts/script-tela-logado.php';
                ?>
            </div>
            <nav class="mid-ancoras-main">
                <ul>
                    <li><a href="tela-principal.php">Início</a></li>
                    <li><a href="alunos.php">Alunos</a></li>
                    <li><a href="cadastrar-alunos.php">Cadastrar</a></li>
                </ul>
            </nav>
            <div class="header-right">
                <form action="../scripts/logout.php" method="POST" class="form-logout">
                    <button>Logout</button>
                </form>
            </div>
        </div>
    </header>
    <main>
        <section class="card-main"> 
            <div class="card-cadastro">
                <h1 class="card-text-titulo">Cadastrar Aluno.</h1>
                <!-- Falta fazer validacao-->
                <form  action="cadastrar-alunos.php" class="form-cadastro" method="POST">
                   <label for="nome-cadastro-aluno">Nome completo:</label>
                   <input type="text" id="nome-cadastro-aluno" name="nome-cadastro-aluno">

                   <label for="matricula-cadastro-aluno">Matricula:</label>
                   <input type="number" name="matricula-cadastro-aluno" id="matricula-cadastro-aluno">

                   <label for="nota-cadastro-um">Nota 1:</label>
                   <input type="number" name="nota-cadastro-um" id="nota-cadastro-um">

                   <label for="nota-cadastro-dois">Nota 2:</label>
                   <input type="number" name="nota-cadastro-dois" id="nota-cadastro-dois">

                   <button>cadastrar</button>
                </form>
                <!-- Script PHP para o cadastro -->
                <?php
                require '../scripts/script-cadastro-aluno.php';
                ?>
            </div>
        </section>
    </main>
</body>
</html>

<?php 
    
?>