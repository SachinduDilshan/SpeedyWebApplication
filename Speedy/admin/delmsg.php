<?php
    require '../connection.php';
    
    if(isset($_GET["mid"])){
    $mid = $_GET['mid'];

    $sql = "DELETE FROM `messages` WHERE `mid`='".$mid."'";

    if(mysqli_query($db,$sql)){
        echo "That Message is deleted!"."<br>".
        "<button onclick='location.href=".'"msgs.php.'.'"'."'>"."Go back"."</button>";
    }else{
        echo "Error :".mysqli_error($db)."<br>".$sql;  
    }
}
?>