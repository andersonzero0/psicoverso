<?php
    if(isset($_SESSION['chatON'])) {

        header("location: chat.php");
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/main.css">
    
    <title>Painel | Psicoverso</title>
</head>
<body class="body_painel">
    <?php include "views/header.php" ?>
    <main>

        <div class="painel">
            <button class="btn-painel"><a href="models/model_createCall.php">Quero ajuda</a></button>
            <button class="btn-painel"><a href="search.php">Posso ajudar</a></button>
        </div>
        
    </main>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>