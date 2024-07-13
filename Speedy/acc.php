<?php 
session_start();
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/FormStyles.css">
  <title>Log in-Speedy Tire PRO</title>
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
                <h4 style="color: #a1a1a1;">Call now on: 025-2225644</h4>
                <h4 style="color: #a1a1a1;">No.52, UC Quaters, New Town Anuradhapura</h4>
            </div>
            <div class="btns">
                <a href="home.html" style="background-color: rgb(1, 155, 16); color: rgb(255, 255, 255);">Home</a>
                <a href="chat.php" style="background-color: blue; ">Chat With Us</a>
                <a href="about.html" style="background-color: rgb(194, 95, 181); font-style: italic;">About Us</a>
                <a href="logout.php" style="background-color: rgb(212, 1, 1); color: rgb(255, 255, 255); padding: 5px;">Log Out</a>
                </div>        
    </div>

  </header>
  
    <style>

      .login {
        font-family: Arial, sans-serif;
        background-color: #d4d1d1;
      }
  
      .container {
        width: 300px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.912);
      }
  
      h2 {
        text-align: center;
      }
  
      .form-group {
        margin-bottom: 15px;
      }
  
      .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
      }
  
      .form-group input[type="text"],
      .form-group input[type="password"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
      }
  
      .form-group button {
        width: 100%;
        padding: 8px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
      }
  
      .form-group button:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <div class="login">
    <div class="container">
      <h2>Login</h2>
      <form action="Handler/loginHandler.php">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div><br><br>
        <div class="form-group">
          <button type="submit" name="btnLogin">Login</button>
        </div>
        <h4 style="color: #7e7e7e;">Be logged into our website to have access on our store and more offers!!</h4>
        <div class="newlogo" style="margin-top: 40px;">
          <img src="logo/Black logo - no background.png">
      </div>
      </form>
    </div>
  </div>
  

<!-----------------------------------footer--------------------------------------------->

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