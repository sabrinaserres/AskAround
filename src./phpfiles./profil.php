

<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <div class="typewriter">
      <h1>ASK AROUND.</h1></div></div>
<div class="body">
  <?php
  include "menu.php";
?>


<div class="lead">
    
      <h2> HELLO <?php echo $_SESSION['PSEUDO'] ?> , HERE ARE YOUR DATA :  
      <div class="fakeimg" style="height:200px;">
      <div id="logo">   
    
  <?php 
  include "includes/connect.php";
  $conn = connect();
  $pseudo = $_SESSION['PSEUDO'];
  $sql = "SELECT `MAIL`  FROM `inscription` WHERE `PSEUDO` = '$pseudo' ";
  $result = $conn->query($sql); 
  $row = $result->fetch_assoc();
    if(isset($result)){
    echo  "Login  : " .    $pseudo;
    echo "<br>";
    echo "<br>";
    echo  "Mail :   " . $row['MAIL'];
    echo "<br>";
    echo "<br>";
    }
    echo "Do you want to change your password ? : " ?>


      <form action="<?php $_PHP_SELF; ?>" method="post">
      <div class='input-fields'>
      <input type="password" name="old" placeholder="old password"/> 
      <input type="password" name="new"  placeholder="new password" /> 
      <input type="password" name="news"  placeholder="confirm new password"/>
      </div>
      <div>
      <input type="submit" value="submit" name="submit"/>
      </form> 
      </div>


    <?php
    
    if(isset($_POST["submit"])){
        include "includes/connect.php";
        $conn = connect();  
        $p = $_SESSION['PSEUDO'];
        $new = $_POST["new"];
        $new2 = $_POST["news"];
        $old = $_POST["old"];
        //$sql = "SELECT `PASSWORD`  WHERE `PSEUDO`= '$p'";
        //$result = $conn->query($sql);
        //if($result == $old  && $new == $news){
          $sql = "UPDATE `inscription` SET `PASSWORD`='$new' WHERE `PSEUDO`='$p' ";
          $result = $conn->query($sql);
          if($result == TRUE){
            echo "Password changed";
            header('Location: profil.php?mdp=1');
        }
          else
          {
            echo "Wrong password. Try again";
            
          }

                    
    }
    
  ?>
  </div>
  </div>




