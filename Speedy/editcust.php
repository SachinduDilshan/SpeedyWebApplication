<?php
session_start();
require_once 'connection.php';

if(!isset($_SESSION["USER_ID"])){
  header("Location: acc.php");
}

    $memberid = "";
    $fname = "";
    $sname= "";
    $regno="";
    $email = "";
    $address = "";   
    
    $sql = "SELECT * FROM `registration` WHERE `user_id` = '".$_SESSION["USER_ID"]."' " ;
   
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result)>0){
        if($row = mysqli_fetch_assoc($result)){
            $memberid = $row['user_id'];
            $fname = $row['uname'];
            $sname= $row['sname'];
            $regno = $row['regno'];
            $email = $row['email'];
            $address = $row['Address'];
            
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Details</title>
    <link rel="stylesheet" type="text/css" href="css/editcus.css">
</head>
<body>
    
<body>
<form action="updatecust.php?id=" method="post" style="margin-left:50px">
        <div class="reserve-box">
            <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Enter your details below</h1><br><br><br>
            <div class="data">
           
                <label for="">User ID:</label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <input type="text" id="reserveID" name="user_id" value="<?php echo $memberid ?>" readonly><br><br>
            

                <label for="">Full Name:</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                <input type="text" id="fname" name="fname" value="<?php echo $fname ?>" ><br><br>

                <label for="">Last Name:</label>&nbsp &nbsp &nbsp 
                <input type="text" id="from" name="sname" value="<?php echo $sname ?>" required > <br><br>
    
                <label for="">Registration Number:</label> 
                <input type="text" id="to" name="regno" value="<?php echo $regno ?>" required><br><br>

                <label for="">Email:</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
                <input type="email" id="distance" name="email" value="<?php echo $email ?>" required><br><br>
    
                <label for="">Address:</label>&nbsp &nbsp &nbsp 
                <input type="text" id="date" name="address" value="<?php echo $address ?>" required><br><br>


                <input id="edit" type="submit" value="Update" name="edit" >
</div>
</div>
    </form>
</body>
</html>