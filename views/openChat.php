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
    <title>Chat</title>
</head>
<body>
    <main>

        <div>
            <p id="p-link">Link: </p>
        </div>

        <?php if($what == "reciever") { ?>

        <div>

            <input type="text" id="link">
            <button type="button" id="btnLink">Enviar</button>
            
        </div>    

        <?php } ?>
        
    </main>

    <script>

        const btnLink = document.getElementById("btnLink");

        function awaitLog() {

        const xhr = new XMLHttpRequest();
        xhr.open('GET', `models/model_linkCall.php?idMyCall=<?= $_SESSION['chatON']['id'] ?>`);

        xhr.onload = () => {
            if(xhr.status === 200) {
                if(xhr.responseText != "false") {
                    
                    document.getElementById('p-link').innerHTML = "Link: " + xhr.responseText
                    
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
</body>
</html>
