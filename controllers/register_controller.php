<?php

    if(isset($_POST['btnSubmitRegisterUSer'])) {
        session_start();

        $_SESSION['fullname'] = $_POST['fullname'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['telefone'] = $_POST['telefone'];
        $_SESSION['about_user'] = $_POST['about_user'];
        $_SESSION['type_user'] = $_POST['type_user'];
        $_SESSION['birthDate'] = $_POST['birthDate'];
        $_SESSION['uf'] = $_POST['uf'];
        $_SESSION['city'] = $_POST['city'];
        $_SESSION['street'] = $_POST['street'];
        $_SESSION['square'] = $_POST['square'];
        $_SESSION['password_user'] = $_POST['password_user'];

        if(isset($_FILES['avatarURI'])) {

            $target_dir = "../uploads/avartar/";
            $target_name = time() . "." . $imageFileType;
            $target_file = $target_dir . basename($target_name);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            
            $check = getimagesize($_FILES["avatarURI"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["avatarURI"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "Sorry, only JPG, JPEG, PNG";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["avatarURI"]["tmp_name"], $target_file)) {
                    $_SESSION['avatarURI'] = htmlspecialchars( basename($target_name));
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

            session_destroy();
            
        } else {

           $_SESSION['avatarURI'] = "avatar_default.png";
           session_destroy();
            
        }
        
    }
?>