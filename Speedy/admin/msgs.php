<?php 
session_start();
require_once '../connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>See Messages</title>
    <link rel="stylesheet" type="text/css" href="adminstyle.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>View Customer Messages</h1>
        </header>
        <nav>
            <ul>  
                <li><a href="admin.php">Admin Dashboard</a></li>
                <li><a href="orders.php">Customer Orders</a></li>
                <li><a href="seecustomers.php">Customers</a></li>
                <li><a href="msgs.php">Messages</a></li>

            </ul>
        </nav>
<?php

$sql = "SELECT * FROM `messages` ";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {

    $mesage=$row['mid']; ?>

      <div class="container">
        <h3>Owner name: <?php echo($row['oname']);  ?> </h3>        
        <h3>Shop name : <?php echo($row['sname1']);  ?> </h3>
        <p>Address: <?php echo($row['address']); ?><p>
        <h4>Message : <?php echo( $row['message']);  ?> </h4>  
        <p>Message ID: <?php echo($row['mid']); ?> </p>
        <p>Contact number : <?php echo($row['P_Num']);  ?> </p> 
       
       <?php  echo "<button onclick='location.href=".'"delmsg.php?mid='.$row['mid'].'"'."'> Delete Message</button>"?>
      </div>
    </div>
  </div>

  <?php
    }

}else{

  echo("No messages fonud");

}
?>