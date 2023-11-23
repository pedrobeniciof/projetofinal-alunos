<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escolar</title>
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&family=Nunito:wght@300;400;500;700&family=Roboto:wght@300;400;500;700&family=Unbounded:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="scripts/script.js" defer></script>
</head>
<body>
    <header>
       <h1>Ciência da computação</h1>
    </header>
    <!-- Script PHP para o login -->
    <?php
        require 'scripts/script-login.php';
    ?>
    <main class="main-login fullscreen-login">
        <div class="img-principal">
        </div>
        <div class="login-right">
            <h1 class="login-right-text">LOGIN</h1>
            <form onsubmit="return validarLogin()" action="" class="login-right-form" method="POST" >
                <label for="nome">Usuário:</label>
                <input type="text" name="nome" id="nome">

                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha">
                <div class="login-errado">
                    <?php
                        if($login_incorreto){
                            echo '<p class="login-errado-texto">Usuário ou senha incorretos.</p>';
                        }
                    ?>
                </div>
                <button class="btn btn-primary">Entrar</button>
            </form>
            <div class="login-right-cadastro">
                <p>Ainda não tem cadastro? <a href="pages/cadastros.php">Cadastre-se</a></p>
            </div>
        </div>
    </main>
    <footer>
        <p>Sistema desenvolvido conforme o projeto final de programação web.</p>
    </footer>
</body>
</html>

