<link href='style.css' rel='stylesheet'>
<?php
  session_start(); // On réouvre la session
?>
<h2><button  class="noselect" onclick="window.location.href='https://zhmima.vvvpedago.enseirb.fr/it103-15802/tmp/mypage.php';"> Home  </button> 
<button onclick="window.location.href='https://zhmima.vvvpedago.enseirb.fr/it103-15802/tmp/ask.php';">Ask a question</button> 
<button onclick="window.location.href='https://zhmima.vvvpedago.enseirb.fr/it103-15802/tmp/questions.php';"> All questions </button> 
<button onclick="window.location.href='https://zhmima.vvvpedago.enseirb.fr/it103-15802/tmp/myquestion.php';"> My Questions</button> 
<?php
if(isset($_SESSION['PSEUDO'])){
    
  ?>
  <button onclick="window.location.href='tmp/profil.php';"> Profil </button>
  <button onclick="window.location.href='tmp/deconnect.php';"> Log out  </button></h2>
  <div class="lead1">

  <?php
  echo "You're logged in" ;
  echo "<br>";
  echo   "login:" . $_SESSION['PSEUDO'] . ".";
  echo "<br>";
  }
  

  
?>
</div>
<?php
if(isset($_GET['msg'])) {
echo "Answer posted";
echo "<br>";
}
?>
<?php
if(isset($_GET['msg2'])) {
echo "Question posted";
echo "<br>";
}
?>
<?php
if(isset($_GET['msg3'])) {
echo "Question edited";
echo "<br>";
}
?>
<?php
if(isset($_GET['mdp'])) {
echo "Password changed.";
echo "<br>";
}

  
?>
</div>
<?php
if(isset($_GET['msg'])) {
echo "Answer posted";
echo "<br>";
}
?>
<?php
if(isset($_GET['msg2'])) {
echo "Question posted";
echo "<br>";
}
?>
