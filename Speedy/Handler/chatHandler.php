<?php

require_once '..\connection.php';

$oname= $_POST["ownname"];
$sname1= $_POST["shopname"];
$reg_no= $_POST["regnum"];
$email= $_POST["emailaddress"];
$P_Num= $_POST["phonenum"];
$address=$_POST["shopaddress"];
$message=$_POST["subject"];



$sql= "INSERT INTO `messages` (`oname`, `sname1`, `reg_no`, `address`, `P_Num`, `email`, `message`) 
VALUES ('".$oname."','".$sname1."','".$reg_no."','".$address."','".$P_Num."','".$email."','".$message."')";


if (mysqli_query($db, $sql)) {
  header("Location: ..\home.html");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);



?>