<?php
session_start();
$pseudo = $_SESSION['PSEUDO'];
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

<?php


include "includes/connect.php"; // Inclure le fichier
$conn = connect(); // On se connecte à la base de données
$p = $_SESSION["PSEUDO"];
<<<<<<< HEAD
$sql = "SELECT `QUESTION`,`TITLE`,`DATE` FROM `table_ask2` WHERE `PSEUDO` ='$p'"  ;
=======
$sql = "SELECT `QUESTION`,`DATE` FROM `table_ask2` WHERE `PSEUDO` ='$p'"  ;
>>>>>>> 9b7c28ed1be4a59ef5c6396a98f5ef0734b1cc01
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc())
{ ?>

  <div class="lead">
      <h2> YOU ASKED THIS QUESTION :  
      <div class="fakeimg" style="height:200px;">
      <div id="logo">   
    </div>
  <?php 
  echo  "Title :  " . $row['TITLE'];
  echo "<br>";
  echo  $row['QUESTION'];
  echo "<br>";
  echo "<br>";
  echo "on  " .   $row['DATE'];
  echo "<br>";
  ?>
  </div>
  <h2><button onclick="window.location.href='tmp/answer.php?titre=<?php echo $row['QUESTION']?>';"> Answer </button>
  <button onclick="window.location.href='tmp/view_answer.php?titre=<?php echo $row['QUESTION']?>';"> View All Answers</button>
  <button onclick="window.location.href='tmp/edit.php?qst=<?php echo $row['QUESTION']?>&title=<?php echo $row['TITLE']?>';"> Edit my question </button>
</h2>
<?php   
}
} 
else {
    echo "0 results";
}

?>
    
    
    


</div>