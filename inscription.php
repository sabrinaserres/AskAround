


<link rel="stylesheet" href="login.css">
<div class="body">


    <form action="<?php $_PHP_SELF; ?>" method="post">
        <div class='bold-line'></div>
    <div class='container'>
    <div class='window'>
        <div class='overlay'></div>
        <div class='content'>
        <div class='welcome'>Hello There!</div>
        <div class='subtitle'>We're almost done. Before using our services you need to create an account.</div>
        <div class='input-fields'>
            <input type='text' name="pseudo" placeholder='Username' class='input-line full-width'>
            <input type='email' name="mail" placeholder='Email' class='input-line full-width'>
            <input type='password' name="password" placeholder='Password' class='input-line full-width'>


        </div>
        
        <div>
        <input type='submit' name="submit" placeholder='  Submit' class='ghost-round full-width'>
        </div>
        </div>
    </div>
    </div>
    </form>


    <?php
        if(isset($_POST["submit"])){
            include "includes/connect.php"; // Inclure le fichier
            $conn = connect(); // On se connecte à la base de données
            $pseudo = $_POST["pseudo"];
            $mdp = $_POST["password"];
            $ml = $_POST["mail"];
            $sql = "INSERT INTO `inscription` (`PSEUDO`,`PASSWORD` , `MAIL`)
             VALUES ('$pseudo','$mdp','$ml')";
            $result = $conn->query($sql);// On lance la requête
            if ($result === TRUE) {
                echo "New record created successfully";
                header('Location: connexion.php');
						
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>
    </div>
    
   

    

   

