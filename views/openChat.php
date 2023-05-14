<?php
if ($_SESSION['chatON']['id_recieverFK'] == $_SESSION['authToken']['id']) {
    $MyId = $_SESSION['chatON']['id_recieverFK'];
    $OutherId = $_SESSION['chatON']['id_creatorFK'];
} else {
    $MyId = $_SESSION['chatON']['id_creatorFK'];
    $OutherId = $_SESSION['chatON']['id_recieverFK'];
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
        
    </main>

    <script>

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
        
    </script>
</body>
</html>
