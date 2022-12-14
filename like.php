<?php
session_start();
$like = $_GET["like"];
?>


<?php
        
    include "includes/connect.php"; // Inclure le fichier
    $conn = connect(); // On se connecte à la base de données
<<<<<<< HEAD
    $sql = "UPDATE `table_answer` SET `LIKE` = (`LIKE` + 1) WHERE `REPONSE` = '$like' ";
=======
    $sql = "UPDATE `table_answer` SET `LIKE` = (`LIKE` + 1) WHERE `REPONSE` = '$like'";
>>>>>>> 9b7c28ed1be4a59ef5c6396a98f5ef0734b1cc01
    $result = $conn->query($sql);// On lance la requête
    if (isset($result)) {
        echo "New record created successfully";
        header('Location: view_answer.php');
    }
    else {
        echo "error with liking the answer";
        header('Location: view_answer.php');
    }    
                    
<<<<<<< HEAD
    if ($action  == 1){
        $sql = "UPDATE `table_answer` SET `LIKE` = (`LIKE` + 1) WHERE `REPONSE` = '$idr' AND `QUESTION` = '$like'";
        $result = $conn->query($sql);// On lance la requête
         
        header('Location: view_answer.php');
      }
=======
   
>>>>>>> 9b7c28ed1be4a59ef5c6396a98f5ef0734b1cc01

    
?> 