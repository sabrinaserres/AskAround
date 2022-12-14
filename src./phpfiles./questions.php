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


    
    
    


</div>


</div>
<div id="global">
 
<div class="row">
  <div class="leftcolumn">







    <!-- <div class="card">
      <h2> LATEST QUESTIONS </h2>
      <h5></h5>
      <div class="fakeimg" style="height:200px;">
        
        <div id="logo">-->
        <?php


include "includes/connect.php"; // Inclure le fichier
$conn = connect(); // On se connecte à la base de données
$sql = "SELECT `QUESTION` , `PSEUDO` , `DATE` , `TITLE` FROM `table_ask2` ";
$result = $conn->query($sql); 
while($row = $result->fetch_assoc())
{ ?>
<!--<div class="row">
  <div class="leftcolumn">-->
  <div class="lead">
      <h2> QUESTION 
      
      <div class="fakeimg" style="height:200px;">
     
      
        <div id="logo">
        
        
    </div>
  
  <?php 
  
  echo  "Title :  " . $row['TITLE'];
  echo "<br>";
  echo "<br>";
  echo  $row['QUESTION'];
  echo "<br>";
  echo "<br>";
  echo "On  " .  $row['DATE']   .   "   by   "    . $row['PSEUDO'] . ".";
  
 
  ?>
  </div>
  <h2><button onclick="window.location.href='tmp/answer.php?titre=<?php echo $row['QUESTION']?>';"> Answer </button>
  <button style= width:160px;  onclick="window.location.href='tmp/view_answer.php?titre=<?php echo $row['QUESTION']?>';">View All Answers</button>
  </h2>

 
  
<?php   
}

<<<<<<< HEAD
?>
=======
?>
>>>>>>> 9b7c28ed1be4a59ef5c6396a98f5ef0734b1cc01
