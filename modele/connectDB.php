<?php
    function connectDB(){
        $servername = "localhost";

        $username = "root";

        $password = "admin";

        $dbname = "wetransfert";
        try {
            $bdd = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password);
            // set the PDO error mode to exception
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $bdd;
            }
        catch(PDOExeption $e){
            $error = $e->getMessage();
            messageErreur($error);
        }

    }



?>
