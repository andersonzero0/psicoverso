<?php
    function connectDB() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "psicoverso_db";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $db);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {

            return $conn;
            
        }
    }

    function createUserDB($fullname, $email, $telefone, $about_user, $avatarURI, $type_user, $birthDate, $city, $street, $square, $uf, $password_user, $conn) {

        if(isset($fullname) && isset($email) && isset($telefone) && isset($about_user) && isset($avatarURI) && isset($type_user) && isset($birthDate) && isset($city) && isset($street) && isset($square) && isset($uf) && isset($password_user)) {

            $sql = "INSERT INTO `users_tb`(`fullname`, `email`, `telefone`, `about_user`, `avatarURI`, `type_user`, `birthDate`, `city`, `street`, `square`, `uf`, `password_user`) VALUES ('$fullname','$email','$telefone','$about_user','$avatarURI' ,'$type_user','$birthDate','$city','$street','$square','$uf','$password_user')";

            $query = $conn->query($sql);

            if(!$query) {

                return false;
                
            } else {

                return true;

            }
            
        }else {

            return false;

        }
    }
?>  