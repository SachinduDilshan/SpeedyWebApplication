<?php
    require '../connection.php';
    
    if(isset($_GET["user_id"])){
    $uid = $_GET['user_id'];

    $sql = "DELETE FROM `registration` WHERE `user_id`='".$uid."'";

    if(mysqli_query($db,$sql)){
        echo "That user is deleted!"."<br>".
        "<button onclick='location.href=".'"seecustomers.php.'.'"'."'>"."Return"."</button>";
    }else{
        echo "Error :".mysqli_error($db)."<br>".$sql;  
    }
}
?>