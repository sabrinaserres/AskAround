<?php
<<<<<<< HEAD
$tlt = $_GET['titre'];
=======
$tlt = $_GET["titre"];
>>>>>>> 9b7c28ed1be4a59ef5c6396a98f5ef0734b1cc01
session_start();
$pseudo = $_SESSION['PSEUDO'];
?>


<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <div class="typewriter">
    
      <h1>ASK AROUND.</h1></div></div>
      


<div class="row">
  
  <h2> </h2>

  <?php
  include "menu2.php";
  
?>


    <form action="<?php $_PHP_SELF; ?>" method="post">
        <div class='bold-line'></div>
    <div class='container'>
    <div class='window'>
        <div class='overlay'></div>





<div class='content'>
        <div class="centre">
        <div class="header" style="height:90px">
        <div class='welcome'>Hello There!</div>
        <div class='subtitle'>Answer</div></div>
        <div class='input-fields'>
            <h1> <input type='text' name="pseudo" placeholder='<?php echo $_SESSION["PSEUDO"] ?>' class='input-line full-width' size="15"></h1>
<<<<<<< HEAD
            <h1><input type='title' name="title" placeholder='<?php echo $_GET['titre'] ?>' class='input-line full-width' size="70" style="height:25px"></h1>
=======
            <h1><input type='title' name="title" placeholder='<?php echo $_GET["titre"] ?>' class='input-line full-width' size="70" style="height:25px"></h1>
>>>>>>> 9b7c28ed1be4a59ef5c6396a98f5ef0734b1cc01
            <h1><input type='reponse' name="reponse" placeholder='Answer' class='input-line full-width' size="150" style="height:250px"></h1>
           


        </div>
        
        <div>
        <input type='submit' name="submit" value="Post"  class='ghost-round full-width'> 
        </div>
        </div>
        </div>
    </div>
    </div>
    </form>


    <?php
        if(isset($_POST["submit"])){
            include "includes/connect.php"; // Inclure le fichier
            $conn = connect(); // On se connecte à la base de données
            //$pseudo = $_POST["PSEUDO"];
            $r = $_POST["reponse"];
            $d = date('Y-m-j');
            $sql = "INSERT INTO `table_answer` (`PSEUDO`,`REPONSE` ,`TITLE`,`DATE`)
             VALUES ('$pseudo','$r','$tlt','$d')";
            $result = $conn->query($sql);// On lance la requête
            if ($result === TRUE) {
                echo "Answer posted";
                header('Location: mypage.php?msg=1');
						
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>
    </div><link rel="stylesheet" href="ask.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<div class="body">



    
