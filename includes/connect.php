<?php
    function connect() {
        $servername = "localhost";
        $username = "root ";
       
        $dbname = "root";
 
        // On crée notre connexion
        $conn = new mysqli($servername, $username, $password, $dbname);
        // On vérifie si elle a bien fonctionnée
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
    ?>