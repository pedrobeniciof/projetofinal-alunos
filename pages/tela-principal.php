<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema escolar</title>
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/tela-principal.css">
    <link rel="stylesheet" href="../styles/alunos-pesquisa.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&family=Nunito:wght@300;400;500;700&family=Poppins:wght@300;400;500;700&family=Roboto:wght@300;400;500;700&family=Unbounded:wght@200;300;400;700&display=swap" rel="stylesheet">
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
        <section class="form-principal">
            <div>
                <h1 class="form-text">Encontrar Aluno.</h1>
                <form action="tela-principal.php" class="form-encontrar-aluno" method="POST">
                    <label for="encontrar-aluno"></label>
                    <input type="text" name="encontrar-aluno" id="encontrar-aluno" placeholder="Nome ou matrícula">
                    <button>Pesquisar</button>
                </form>
                <!-- Script PHP para o cadastro -->
                <?php
                require '../scripts/script-procurar-aluno.php';
                ?>
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>