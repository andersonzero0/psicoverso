<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Cadastro | PsicoVerso</title>
</head>
<body class="body_cadastro">

    <main class="main_cadastro">
        <h1 class="legend_cad">CADASTRO</h1>
        <form action="controllers/cont_cadastro.php" method="post" class="form_cadastro">

            <label for="nome"><input type="text" name="nome" id="nome" placeholder="NOME"></label>
            <label for="email"><input type="email" name="email" id="email" placeholder="EMAIL"></label>
            <label for="senha"><input type="password" name="senha" id="senha" placeholder="SENHA"></label>

            <button class="btnSubmit" type="submit" name="btnSubmit"><i icon-name="arrow-right"></i></button>
        
        </form>

        <p>Possui uma conta? <a href="login.php">Faça login.</a> </p>
    </main>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
    
</body>
</html>
