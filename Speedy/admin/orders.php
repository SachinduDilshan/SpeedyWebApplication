<?php
session_start();
require_once '../connection.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>View Orders</title>
    <link rel="stylesheet" type="text/css" href="adminstyle.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>View Customers' orders</h1>
        </header>
        <nav>
            <ul>
                <li><a href="admin.php">Admin Dashboard</a></li>
                <li><a href="orders.php">Customer Orders</a></li>
                <li><a href="seecustomers.php">Customers</a></li>
                <li><a href="msgs.php">Messages</a></li>

            </ul>
        </nav>
</div>
<?php

$sql = "SELECT * FROM `registration` INNER JOIN `buy`";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {

        
      echo "<table border='1' cellpadding='25' width='90%' style='margin:auto; margin-top:70px; cellpadding:10px; background-color: #dad8d8 ; min-height:500px;'>
                <tr>
                <th>Order ID</th>
                <th>Full Name</th>
                <th>Shop Name</th>
                <th>Registration Number</th>
                <th>Email</th>
                <th>Payment method</th>
                <th>Card Name</th>
                <th>Card Number</th>
                <th>Expire Date of Card</th>
                <th>Cash</th>
                <th>Address</th>
                <th>National ID</th>
                <th>Contact Number</th>
                <tr>";

                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>"."&nbsp".$row['oid']."<button onclick='location.href=".'"delorder.php?user_id='.$row['oid'].'"'."'> Remove this Order </button>"."</td>";
                    echo "<td>"."&nbsp".$row['uname']."</td>";
                    echo "<td>"."&nbsp".$row['sname']."</td>";
                    echo "<td>"."&nbsp".$row['regno']."</td>";
                    echo "<td>"."&nbsp".$row['email']."</td>";
                    echo "<td>"."&nbsp".$row['paymethod']."</td>";
                    echo "<td>"."&nbsp".$row['card_name']."</td>";
                    echo "<td>"."&nbsp".$row['card_no']."</td>";
                    echo "<td>"."&nbsp".$row['exp']."</td>";
                    echo "<td>"."&nbsp".$row['cash']."</td>";
                    echo "<td>"."&nbsp".$row['Address']."</td>";
                    echo "<td>"."&nbsp".$row['nid']."</td>";
                    echo "<td>"."&nbsp".$row['contactno']."</td>";
                    echo "</tr>";
                }
                echo "</table>";

                mysqli_close($db);
        ?>


  </div>


<?php
 }


else{
    
  echo ("No Orders found");

}

?>