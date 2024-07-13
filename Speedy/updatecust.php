<?php

require 'connection.php';

if (isset($_POST['edit'])) {
    $memberid = $_POST['user_id'];
    $fname= $_POST['fname']; 
    $sname= $_POST['sname'];
    $regno = $_POST['regno'];
    $email = $_POST['email'];
    $address = $_POST['address'];


    $sql="UPDATE `registration` SET 
    `uname`='$fname',`sname`='$sname',`regno`='$regno',`email`='$email',`Address`='$address' WHERE user_id='$memberid'  ";
   
    if($db->query($sql)===TRUE){
        echo "<h2>Your Details Updated</h2>"."<br>"."<button onclick='location.href=".'"profile.php.'.'"'."'>"."Back"."</button>"; 
    }else{
        echo "Error: " . $sql . "<br>" . $db->error;
    }

}

?>