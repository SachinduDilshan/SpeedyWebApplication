<?php
    require '../connection.php';
    
    if(isset($_GET["user_id"])){
    $uid = $_GET['user_id'];

    $sql = "DELETE FROM `buy` WHERE `oid`='".$uid."'";

    if(mysqli_query($db,$sql)){
        echo "<h1>That Order is deleted!<h1>"."<br>".
        "<button onclick='location.href=".'"orders.php.'.'"'."'>"."Return"."</button>";
    }else{
        echo "Error :".mysqli_error($db)."<br>".$sql;  
    }
}
?>