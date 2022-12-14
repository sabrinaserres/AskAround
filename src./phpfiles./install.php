
<?php

include("includes/connect.php");
connect();






$sql="CREATE TABLE IF NOT EXISTS `inscription` (";
$sql .=  "`PSEUDO` varchar(11) NOT NULL,";
$sql .= " `MAIL` varchar(45) DEFAULT NULL,";
$sql .= " `PASSWORD` varchar(45) DEFAULT NULL,";
$sql .= " PRIMARY KEY (`PSEUDO`)";
$sql .= ") ENGINE=InnoDB DEFAULT CHARSET=latin1;";
mysql_query($sql) or die(mysql_error());



$sql="INSERT INTO `inscription` (`PSEUDO`, `MAIL`, `PASSWORD`) VALUES";
$sql .="('max', 'max@max', 'max'),";
$sql .="('bob', 'bob@bob', 'bob'),";






$sql="CREATE TABLE IF NOT EXISTS `table_ask2` (";
$sql .= "`TITLE` text NOT NULL,";
$sql .="`DATE` date NOT NULL,";
$sql .="`QUESTION` text NOT NULL,";
$sql .="`PSEUDO` text NOT NULL";
$sql .=") ENGINE=InnoDB DEFAULT CHARSET=latin1;";



$sql="INSERT INTO `table_ask2` (`TITLE`, `DATE`, `QUESTION`, `PSEUDO`) VALUES";
$sql .="('TITRE , '2022-05-20', 'Hello?', 'max'),";

mysql_query($sql) or die(mysql_error());



$sql="CREATE TABLE IF NOT EXISTS `table_answer` (";
$sql .= "`TITLE` text NOT NULL,";
$sql .="`REPONSE` text NOT NULL,";
$sql .="`LIKE` int(11) NOT NULL,";
$sql .="`DISLIKE` int(11) NOT NULL,";
$sql .="`DATE` date NOT NULL,"
$sql .="`PSEUDO` text NOT NULL";
$sql .=) "ENGINE=InnoDB DEFAULT CHARSET=latin1;";



$sql="INSERT INTO `table_answer` (`TITLE`, `REPONSE`, `LIKE`, `DISLIKE`, `DATE`, `PSEUDO`) VALUES";
$sql .="('Hello?', 'Hello!', 1, 0, '2022-05-18', 'max'),";
mysql_query($sql) or die(mysql_error());

?>

