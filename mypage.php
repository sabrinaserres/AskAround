
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <div class="typewriter">
    
      <h1>ASK AROUND.</h1></div></div>
      

<div class="row">
  
  <h2> </h2>

  <?php
  include "menu.php";
?>



<?php


include "includes/connect.php"; // Inclure le fichier
$conn = connect(); // On se connecte à la base de données
<<<<<<< HEAD
$sql = "SELECT `QUESTION` , `PSEUDO` , `DATE` , `TITLE` FROM `table_ask2` ORDER BY `DATE` DESC LIMIT 5 ";
=======
$sql = "SELECT `QUESTION` , `PSEUDO` , `DATE` FROM `table_ask2` ORDER BY `DATE` DESC LIMIT 7 ";
>>>>>>> 9b7c28ed1be4a59ef5c6396a98f5ef0734b1cc01
$result = $conn->query($sql); 
while($row = $result->fetch_assoc())
{ ?>

  <div class="lead">
    
      <h2>   LATEST QUESTION   : 
      
      <div class="fakeimg" style="height:200px;">
      <div id="logo">   
    </div>
  <?php 
<<<<<<< HEAD
  echo  "Title :  " . $row['TITLE'];
=======
  echo  $row['PSEUDO'] . "  asked  :  ";
>>>>>>> 9b7c28ed1be4a59ef5c6396a98f5ef0734b1cc01
  echo "<br>";
  echo "<br>";
  echo  $row['QUESTION'];
  echo "<br>";
  echo "<br>";
<<<<<<< HEAD
  echo "On  " .  $row['DATE']   .   "   by   "    . $row['PSEUDO'] . ".";
  
=======
  echo "<br>";
  echo "on  " .   $row['DATE'];
  echo "<br>";
>>>>>>> 9b7c28ed1be4a59ef5c6396a98f5ef0734b1cc01
  ?>
  </div>
  <h2><button onclick="window.location.href='tmp/answer.php?titre=<?php echo $row['QUESTION']?>';"> Answer </button>
  <button style= width:160px;  onclick="tmp/view_answer.php?titre=<?php echo $row['QUESTION']?>';">View All Answers</button>
  </h2>
<?php   
}

?>


               
           </div></div>
      <p></p>
    </div>
<<<<<<< HEAD

    <div class="lead">
    
    <h2>   JOIN US    : 
    
    <div class="fakeimg" style="height:200px;">
    <div id="logo">  
    <a href="https://www.instagram.com/askaroundapp" title= "Ask Around"><img src="insta.png" alt="LOGO" width="50" height="50" opacity="0" /></a> 
    <?php echo "</br>" ?>
    <a href="https://enseirb-matmeca.bordeaux-inp.fr/fr" title= "Enseirb"><img src="enseirb.png" alt="LOGO" width="70" height="70" opacity="0" /></a>
  </div>
=======
>>>>>>> 9b7c28ed1be4a59ef5c6396a98f5ef0734b1cc01
  
<div class="footer">
  <h2></h2>
</div>
</div>
</body>
</html>