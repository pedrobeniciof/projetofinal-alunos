<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema escolar - Cadastro</title>
    <link rel="stylesheet" href="../styles/cadastro.css">
    <link rel="stylesheet" href="../styles/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../scripts/script.js" defer></script>

</head>
<body>
    <main>
        <section class="card-main"> 
            <div class="card-cadastro">
                <h1 class="card-text-titulo">Cadastrar.</h1>
                <form onsubmit="return validarCadastro()" action="cadastros.php" class="form-cadastro" method="POST">
                    <label for="nome-cadastro">Usuário:</label>
                    <input type="text" name="nome-cadastro" id="nome-cadastro">
    
                    <label for="email-cadastro">Email:</label>
                    <input type="email" name="email-cadastro" id="email-cadastro">
    
                    <label for="senha-cadastro">Senha:</label>
                    <input type="password" name="senha-cadastro" id="senha-cadastro">
                    <div class="cadastro-erro">
                       
                    </div>
    
                    <button class="btn btn-primary btn-cadastro">cadastrar</button>
                </form>
                <!-- Script PHP para o cadastro -->
                <?php
                require '../scripts/script-cadastro.php';
                ?>
            </div>
        </section>
    </main>
</body>
</html>

<?php 
    
?>