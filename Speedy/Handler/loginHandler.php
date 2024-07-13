<?php

session_start();

require_once '..\connection.php';

$email= $_GET["username"];
$passwrod= $_GET["password"];


$sql="SELECT * FROM `registration` WHERE `email`='{$email}' AND `password` ='{$passwrod}'";

$result =mysqli_query($db,$sql);


if(mysqli_num_rows($result)>0) {
	
	while ($row =mysqli_fetch_assoc($result)) {
		
		$_SESSION['USER_ID']=$row["user_id"];	
	}
	
	header("Location: ..\store.php");
	
} else {
	header("Location: ..\login.php?AccountnotFound");
	
}

mysqli_close($db);

?>