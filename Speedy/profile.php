<?php 
session_start();
require_once 'connection.php';

if(!isset($_SESSION["USER_ID"])){
  header("Location: acc.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile-Speedy Tire PRO</title>
    <link rel="stylesheet" type="text/css" href="css/store.css">
</head>
<body>
    <header>
      <div class="banner">
    <div class="logo">
        <img src="logo/logono bg.png">
    </div>
    <div class="fast">
            <img src="logo/fast.png">
            <h4 style="color: #a1a1a1;">speedytirepro@gmail.com</h4>
            <h4 style="color: #a1a1a1;">Call now on: 0372225644</h4>
            <h4 style="color: #a1a1a1;">No.52, UC Quaters, New Town Anuradhapura</h4>
    </div>
    <div class="btns">
        <a href="home.html">Home</a>
        <a href="chat.php" style="background-color: blue; ">Chat With Us</a>
        <a href="about.html" style="background-color:rgb(194, 95, 181); font-style: italic;">About Us</a>
        <a href="profile.php" style="background-color: rgb(0, 193, 187); ">My Profile</a>
        <a href="logout.php" style="background-color: rgb(212, 1, 1);  padding: 5px">Log Out</a>
        </div>
     </div>
    <br><br><br>
    <div class="name">
        <h1>My Profile...</h1>
    </div> 

  
<?php 

$sql = "SELECT * FROM `registration` WHERE `user_id` = '".$_SESSION["USER_ID"]."'";

$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {

?>

      <div class="container" style="margin-left: 55px; margin-top: 30px">
        <h3> Name: <?php  echo($row['uname']);  ?> </h3> <br>   
        <h3> User ID: <?php echo($_SESSION["USER_ID"]) ;?></h3> <br>  
        <h3> Shop name: <?php  echo($row['sname']);  ?> </h3> <br>
        <h3> Contact number : <?php  echo($row['contactno']);  ?> </h3> <br>
        
      </div>
    </div>  
  </div>

<?php
    
  
  }

}else{
  echo("No data found! Please make an account.");
}
  ?>
  
<?php 

$sql = "SELECT * FROM `buy` WHERE `oid` = '".$_SESSION["USER_ID"]."'";

$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {

?>

      <div class="container" style="margin-left: 55px; margin-top: 30px">
      <h3> Purchase history:</h3><h4> Payment method: <?php echo($row['paymethod'])   ?> </h4><br>
        <h4> Card name: <?php echo($row['card_name']) ?> </h4><br>
        <h4> Card number: <?php echo($row['card_no']) ?> </h4><br>
        <h4> Expire date: <?php echo($row['exp']) ?> </h4><br>
        <h4> Cash: <?php echo($row['cash']) ?> </h4><br>
        
      </div>
    </div>  
  </div>

<?php
    
  
  }

}else{
  echo("No data found for purchase history!");
}
  ?>

<a href="editcust.php" style="margin-left:80px; margin-down:60px; font-size:20px; color:red;">Edit My Details</a>
<footer>
  <div class="foo">
    <p style="margin-right: 545PX; font-size: 20px; font-style: italic;">Follow us on   
      <img src="logo/in.png" style="margin-left: 12px;">
      <img src="logo/wa.png" style="margin-left: 12px;">
      <img src="logo/fb.png" style="margin-left: 14px;"></p>
    <div class="newlogo">
      <img src="logo/logono bg.png">
  </div>

  </div>
  
  
  <div class="newfoo"> <h1>Need any help ? <br> HOTLINE : +94778880817  </h1>
  <a href="chat.php">Contact US</a>
  <div class="pay"><p style="margin-bottom: 10px;"> We accept
    <img src="logo/master-card.png" style="margin-left: 12px;">
    <img src="logo/visa.png" style="margin-left: 12px;">
    <img src="logo/american-express.png" style="margin-left: 14px;"></p>
  </div>
  <p>&copy; 2023 K.G.S.D Abeyrathne (SA22527974). All rights reserved.</p>
  </div>
 
</footer>

</body>
</html>