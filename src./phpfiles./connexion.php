
<link rel="stylesheet" href="login.css">
<div class="body">


    <form action="<?php $_PHP_SELF; ?>" method="post">
        <div class='bold-line'></div>
    <div class='container'>
    <div class='window'>
        <div class='overlay'></div>
        <div class='content'>
        <div class='welcome'>Hello There!</div>
        <div class='subtitle'>Sign in to access to your Ask Around page!.</div>
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
            include "includes/connect.php";
            session_start();
            $conn = connect(); // On se connecte à la base de données
						$pseudoconnexion = $_POST["pseudo"];
						$mdpconnexion = $_POST["password"];
						$mail = $_POST["mail"];
						
            $sql = "SELECT * FROM `inscription`"; 
            $result = $conn->query($sql);
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					echo $row["PSEUDO"];
					echo "\n";
					if ($pseudoconnexion==$row["PSEUDO"] && $mdpconnexion==$row["PASSWORD"] && $mail==$row["MAIL"] )  {
						echo "connexion,on réussie";
  						// On définie les variables de session
						  $_SESSION["PSEUDO"] = "$pseudoconnexion";
								echo "$connect";
								header('Location: mypage.php');
						
						break;
			} 
					else if ( $row["PSEUDO"] == NULL) {
						echo "";
			} 
					else {
						echo "pseudo ou mot de passe incorrect.";
			}
		}
	}
}
        
	?>

