<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/main.css">

    <title>Conectar</title>
</head>
<body class="body_auth">

    <main class="main_register">
        <form action="" enctype="multipart/form-data" method="post" class="conteiner_formRegister">
            <div>
                <legend id="registre_se">Registre-se</legend>
            </div>
            <div class="formRegister">
                <label for="fullname">Nome Completo:<input id="fullname" name="fullname" type="text" required> </label>

                <label for="email">Email:<input id="email" name="fullname" type="email" required> </label>

                <label for="telefone">Telefone:<input id="telefone" name="telefone" type="tel" required> </label>

                <label for="about_user">Sobre você:<textarea name="about_user" id="about_user" cols="30" rows="10"></textarea></label>

                <div>
                    <label for="client"><input type="radio" value="client" name="type_user" id="client">Cliente</label>
                    <label for="profis"><input type="radio" value="profis" name="type_user" id="profis">Psicologo</label>
                </div>

                <label for="birthDate">Data de nascimento:<input type="date" name="birthDate" id="birthdate"></label>

                <label for="avatarURI">Foto de perfil:<input type="file" name="avatarURI" id="avatarURI" accept="image/jpg, image/jpeg, image/png"> </label>

                <label for="fullname">CEP:<input id="cep" name="cep" type="number" required> </label>
                <label for="fullname">UF:<input id="uf" name="uf" type="text" disabled> </label>

                <label for="fullname">Cidade:<input id="city" name="city" type="text" disabled> </label>

                <label for="fullname">Rua:<input id="street" name="street" type="text" required> </label>

                <label for="fullname">Bairro:<input id="square" name="square" type="text" required> </label>

                <label for="fullname">Senha:<input id="password_user" name="password_user" type="password" required> </label>
                
                <input type="submit" value="Registrar" name="btnSubmitRegisterUSer">
            </div>
            
        </form>
    </main>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>

    <script src="assets/js/App.js"></script>

</body>
</html>