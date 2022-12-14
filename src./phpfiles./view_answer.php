<?php
session_start();
$pseudo = $_SESSION['PSEUDO'];
$tlt = $_GET['titre'];

?>



<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <div class="typewriter">
      <h1>ASK AROUND.</h1></div></div>
<div class="body">
  <?php
  include "menu2.php";
?>

<div class="lead">
    
      <h2> QUESTION :  
      <div class="fakeimg" style="height:200px;">
      <div id="logo">   
    </div>
  <?php 
  echo  $_GET["titre"];
  echo "<br>";
  echo "<br>";
  ?>
  </div>
  </div>


  <?php

include "includes/connect.php"; // Inclure le fichier
$conn = connect(); // On se connecte à la base de données
//$tlt = $_GET['titre'];

$sql = "SELECT `REPONSE`, `DATE`, `PSEUDO`,`LIKE`,`DISLIKE`  FROM `table_answer` WHERE `TITLE` = '$tlt' ORDER BY `LIKE` DESC LIMIT 10  ";
$result = $conn->query($sql); 

  if (isset($result)) {
  while($row = $result->fetch_assoc())
  { 
        ?>

      <div class="lead">
        
          <h2> ANSWER :  
          <div class="fakeimg" style="height:200px;">
          <div id="logo">   
        </div>
      <?php 
      
      echo  $row['PSEUDO'] . "  answered  :  ";
      echo "<br>";
      echo "<br>";
      echo  $row['REPONSE'];
      echo "<br>";
      echo "<br>";
      echo "on  " .  $row['DATE'];
     $ans = $row['REPONSE'];
    
      ?>
      </div>

      <?php 
      if ($row['PSEUDO']!= $_SESSION['PSEUDO'])
      {
        ?>
        <script src="https://use.fontawesome.com/fe459689b4.js"></script>
        <h2>
        <button class="fa fa-thumbs-up fa-lg"  onclick="window.location.href='tmp/like.php"> <?php echo $row['LIKE']?></button> 
        
        <button class="fa fa-thumbs-down fa-lg" onclick="window.location.href='tmp/view_answer.php?dislike=<?php echo $row['QUESTION']?>';"> <?php echo $row['DISLIKE']?></button>
       
      </h2>
      <?php
      }
      ?>
    
      
    <?php  
  
}
  } 
else {
  ?>
  <div class="lead">
    
      <h2> NO ANSWERS YET   
         
    </div>
<?php
  
} 

<<<<<<< HEAD
=======



>>>>>>> 9b7c28ed1be4a59ef5c6396a98f5ef0734b1cc01
?>
  
