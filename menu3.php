<link href='style.css' rel='stylesheet'>
<?php
  session_start(); // On réouvre la session
?>

 
<h1><button onclick="window.location.href='tmp/connexion.php';"size="75" style="height:50px"style="width:50px"> Log in </button> 
<button onclick="window.location.href='tmp/inscription.php';"size="75" style="height:50px" style="width:50px"> Sign in</button> </h1>

 
<?php
if(isset($_SESSION['PSEUDO'])){
    
    ?>
    <h2><button onclick="window.location.href='https://zhmima.vvvpedago.enseirb.fr/it103-15802/tmp/deconnect.php';"> Déconnexion</button></h2>
   
    <?php
    echo "tu es connecté" . $_SESSION['PSEUDO'] . ".";
    }
  
  ?>


