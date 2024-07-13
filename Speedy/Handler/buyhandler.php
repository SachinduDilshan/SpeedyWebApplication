<?php
session_start();
require_once '..\connection.php';

if(!isset($_SESSION["USER_ID"])){
  header("Location: acc.php");
}

if(isset($_POST['buyButon'])){
$cardname= $_POST["cardname"];
$cardnumber= $_POST["cardnum"];
$expire= $_POST["expdate"];
$cashamount= $_POST["cash"];
$payselect= $_POST["payment-method-select"];

	$sql= "INSERT INTO `buy`(`oid`, `card_name`, `card_no`, `exp`, `cash`, `paymethod`)
  VALUES ('".$_SESSION["USER_ID"]."','".$cardname."','".$cardnumber."','".$expire."','".$cashamount."','".$payselect."')";



if (mysqli_query($db, $sql)) {
  header("Location: ..\store.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);

}else{
  header("Location: ..\store.php");
}

?>