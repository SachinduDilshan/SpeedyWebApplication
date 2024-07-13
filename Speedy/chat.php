<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Us</title>
  <link rel="stylesheet" type="text/css" href="css/chatstyle.css">
  
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
      <a href="home.html">Home</a>
      <a href="store.php">Store</a>
      <a href="login.php">Sign In</a>
      <a href="#" style="background-color: rgb(255, 255, 255); color: black; ">Chat With Us</a>
      <a href="about.html" style="background-color: rgb(194, 95, 181); font-style: italic;">About Us</a>
      </div>
      </div>
  <br><br><br>
  <div class="name">
      <h1>Contact Us...</h1>
  </div> 
  <h3 style="text-align: justify; margin-top: 30px; font-weight: lighter; margin-left: 20px;margin-bottom: 25px;" >
    We would love to hear from you! If you have any inquiries or need assistance, please feel free to contact our customer support team.<br>
    Email: speedytirepro@gmail.com<br>
    Phone: 025-222-56-44<br>
  </h3>

  
  <div class="container">
    <form action="Handler/chatHandler.php" id="form2" name="form2" method="post">
      <label for="fname">Owner Name</label>
      <input type="text" id="name" name="ownname" placeholder="Name of the shop owner with initials..." required>
  
      <label for="lname">Shop Name</label>
      <input type="text" id="sname" name="shopname" placeholder="Name of the shop..." required>

      <label for="lname">Registration Number</label>
      <input type="text" id="regno" name="regnum" placeholder="Registration number of the shop..." required>

      <label for="lname">Address</label>
      <input type="text" id="addess" name="shopaddress" placeholder="Address of the shop..." required>

      <label for="lname">Contact Number</label>
      <input type="text" id="conno" name="phonenum" placeholder="Your mobile phone number..." required>

      <label for="lname">Email Address</label>
      <input type="text" id="eaddress" name="emailaddress" placeholder="Please provide a valid email address!   (ex:shopname@gmail.com)" >
  
      <label for="subject">Your message</label>
      <textarea id="subject" name="subject" placeholder="Write your message.." style="height:200px"></textarea>
  
      <input type="submit" value="Submit">
    </form>
  </div>

</header>


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
      
      
      <div class="newfoo"> <h1>Need any help ? <br> HOTLINE : +94778880817</h1>
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