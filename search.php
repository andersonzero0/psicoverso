<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Search Call | PsicoVerso</title>
</head>
<body>
        <main class="main-loading">

            <div class="loading-icon">
                <img src="assets/imgs/loading.gif" alt="">
            </div>

        </main>

        <script>
            function searchCall() {

                const xhr = new XMLHttpRequest();
                xhr.open('GET', `models/model_searchCall.php`);

                xhr.onload = () => {
                    if(xhr.status === 200) {
                        if(xhr.responseText == "true") {

                            console.log(xhr.responseText);
                            location.href = "http://localhost/psicoverso/chat.php";
                            
                        } else {

                            console.log(xhr.responseText);
                            
                        }
                    } else {

                        console.log("error: " + xhr.status);
                        
                    }
                }
                xhr.send();
                
            }

            setInterval(searchCall, 1000);
        </script>
</body>
</html>
