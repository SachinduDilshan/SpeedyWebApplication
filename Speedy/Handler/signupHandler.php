<?php

require_once '..\connection.php';

if(isset($_POST['btnSubmit'])){
  
$uname= $_POST["txtFullName"];
$sname= $_POST["txtShopName"];
$regno= $_POST["txtShopReg"];
$email= $_POST["txtEmail"];
$passwrod= $_POST["txtPassword"];
$nid= $_POST["txtNID"];
$contactnumber= $_POST["txtContact"];
$address=$_POST["txtAddress"];


	$sql= "INSERT INTO `registration`(`user_id`,`uname`, `sname`, `regno`, `email`, `password`, `nid`, `contactno`,`Address`)
 VALUES ('".$_SESSION["USERID"]."','".$uname."','".$sname."','".$regno."','".$email."','".$passwrod."','".$nid."','".$contactnumber."','".$address."')";



if (mysqli_query($db, $sql)) {
  header("Location: ..\acc.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);

}else{
  header("Location: ..\acc.php");
}
 ?>