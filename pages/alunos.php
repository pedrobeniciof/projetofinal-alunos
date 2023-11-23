<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/alunos.css">
    <link rel="stylesheet" href="../styles/tabela-alunos.css">
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
        <section class="card-alunos">
            <?php
            require '../scripts/gerar-tabela-alunos.php'
            ?>
        </section>
    </main>
</body>
</html>