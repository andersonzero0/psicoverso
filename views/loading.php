<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Document</title>
</head>
<body>

    <main class="main-loading">

        <div class="loading-icon">
            <img src="assets/imgs/loading.gif" alt="">
        </div>

        <div>
            <button><a href="controllers/exit-load.php">Cancelar busca</a></button>
        </div>
        
    </main>

    
   <script>
        function awaitLog() {

            const xhr = new XMLHttpRequest();
            xhr.open('GET', `models/model_waitLog.php?idMyCall=<?= $_SESSION['chatON']['id'] ?>`);

            xhr.onload = () => {
                if(xhr.status === 200) {
                    if(xhr.responseText == "true") {

                        location.reload();
                        
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