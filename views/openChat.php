<?php
if ($_SESSION['chatON']['id_recieverFK'] == $_SESSION['authToken']['id']) {
    $MyId = $_SESSION['chatON']['id_recieverFK'];
    $OutherId = $_SESSION['chatON']['id_creatorFK'];
    $what = "reciever";
} else {
    $MyId = $_SESSION['chatON']['id_creatorFK'];
    $OutherId = $_SESSION['chatON']['id_recieverFK'];
    $what = "creator";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Chat</title>
</head>
<body>
    <?php
        include "views/header.php"
    ?>
    <main class="main-chat"> 
        <?php if($what == "reciever") { ?>
            <div class="main-chat" style="gap:10px">
            <label >Digite o link para comunicação:</label>
            <input type="text" id="link">
            <button type="button" id="btnLink" class="btn-painel" style="background-color: green; color:white; font-weight:bolder;">Enviar</button>

        </div>  

        <?php } ?>
        <div class="main-chat" style="gap:10px">

            <a id="p-link">Link para comunicação: </a>
            <?php if($what == "creator") { ?>
                <p>Espere que envie o link</p>
            <?php } ?>
            <button class="btn-painel" style="font-size: 0.5em"><a href="controllers/exit-load.php">Sair do chat</a></button>
        </div>

        
    </main>

    <script>

        const btnLink = document.getElementById("btnLink");

        function awaitLog() {

        const xhr = new XMLHttpRequest();
        xhr.open('GET', `models/model_linkCall.php?idMyCall=<?= $_SESSION['chatON']['id'] ?>`);

        xhr.onload = () => {
            if(xhr.status === 200) {
                if(xhr.responseText != "false") {
                    
                    document.getElementById('p-link').innerHTML = "Link para comunicação: " + xhr.responseText
                    document.getElementById('p-link').href = "https://" + xhr.responseText
                    
                }
            } else {

                console.log("error: " + xhr.status);    
                
            }
        }
        xhr.send();
        }

        setInterval(awaitLog, 1000)

        btnLink.addEventListener('click', () => {

            let link = document.getElementById("link").value;

            const xhr2 = new XMLHttpRequest();
            xhr2.open('GET', `models/model_addLink.php?idMyCall=<?= $_SESSION['chatON']['id'] ?>&link=${link}`);
            xhr2.onload = () => {
                if(xhr2.status === 200) {
                    
                    console.log('ok');
                    
                } else {

                    console.log("error: " + xhr2.status);    
                    
                }
            }

            xhr2.send();
            
        })
        
    </script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
