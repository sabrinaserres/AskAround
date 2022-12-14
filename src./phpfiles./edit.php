<?php
session_start();
$pseudo = $_SESSION["PSEUDO"];
$qs = $_GET["qst"];
$tlt = $_GET["title"];
?>

<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <div class="typewriter">
    
      <h1>ASK AROUND.</h1></div></div>
      


<link rel="stylesheet" href="ask.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<div class="body">


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
        <div class='subtitle'>Ask a question</div></div>
        <div class='input-fields'>
           <h1> <input type='text' name="pseudo" placeholder='<?php echo $_SESSION["PSEUDO"] ?>' class='input-line full-width' size="15"></h1>
           <h1><input type='title' name="title" placeholder='<?php echo $_GET["title"] ?>' class='input-line full-width' size="70" style="height:25px"></h1>
           <h1><input type='question' name="question" placeholder='Question' class='input-line full-width' size="150" style="height:250px"></h1>
           


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
            $pseudo = $_SESSION["PSEUDO"];
            $tlt = $_GET["title"];
            $q = $_POST["question"];
            $d = date('Y-m-j');
            $sql = "UPDATE `table_ask2` SET `QUESTION`='$q' WHERE `TITLE`='$tlt' ";
            $result = $conn->query($sql);// On lance la requête
            if($result === TRUE) {
                echo "New record created successfully";
                header('Location: mypage.php?msg3=1');
						
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>
    </div>
