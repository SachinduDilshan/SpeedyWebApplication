<?php

session_start();

require_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/FormStyles.css">
<title>Enter your details to create an account</title>
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
      <a href="store.php" >Store</a>
      <a href=""  style="background-color: rgb(255, 255, 255); color: black;">Sign In</a>
      <a href="chat.php" style="background-color: blue; ">Chat With Us</a>
      <a href="about.html" style="background-color:rgb(194, 95, 181); font-style: italic;">About Us</a>
      </div>
      </div>
      <br><br><br>

<script>

function validateName()
{
var fname = document.getElementById("txtFullName").value;

if((fname=="" || fname==null))
{
alert("Please enter your full name");
return false;
}
return true;

}
//------------------------------------------------------------------------
function validateShop()
{
var fshop = document.getElementById("txtShopName").value;

if((fshop=="" || fshop==null))
{
alert("Please enter your shop name");
return false;
}
return true;

}
//---------------------------------------------------------------------------
function validateReg()
{
var freg = document.getElementById("txtShopReg").value;

if((freg=="" || freg==null))
{
alert("Please enter your shop registration number");
return false;
}
return true;

}

//------------------------------------------------------------------------

function validateEmail()
{
var email = document.getElementById("txtEmail").value;
var at = email.indexOf("@");
var dt = email.indexOf(".");

if((at<0) || (dt<0))
{
alert("Please enter a valid email");
return false;
}
return true;

}

//-------------------------------------------------------------------------

function validatePassword()
{
var pw= document.getElementById("txtPassword").value;
var cpw= document.getElementById("txtConfirmPassword").value;
if((pw!=cpw ) || (pw.length <5))
{
alert("Please enter a correct password");
return false;
}

return true;

}


//----------------------------------------------------------------------------

function validateContact()
{
var tphone= document.getElementById("txtContact").value;
if(tphone.length!=10)
{
alert("Please enter a 10 digit phone number");
return false;
}
return true;

}
//--------------------------------------------------------------------------------------

function validateNID()
{
var nid = document.getElementById("txtNID").value;

if((nid=="" || nid==null))
{
alert("Please enter your National Identity Card number!");
return false;
}
return true;

}




//-----------------------------------------------------------------------------------------------------------------------

function validateAll()
{
if (validateName() && validateShop() && validateReg() &&  validateEmail() &&  validatePassword() && validateNID() && validateContact()  )
{
alert("Your Account has created. Thank you!");
}
else 
{
event.preventDefault();
}

}


</script>

<div class="name">
  <h1>Create an account...</h1>
</div> 

<div class="container">
<form action="Handler/signupHandler.php"  method="post" >
<table width="52%" style="margin-left: 10px">
  <tr>
    <td width="238">Full name of shop owner</td>
    <td width="376"><label for="txtFullName"></label>
      <input type="text" name="txtFullName" id="txtFullName" /></td>
  </tr>
  <tr>
    <td width="238">Name of your shop</td>
    <td width="376"><label for="txtShopName"></label>
      <input type="text" name="txtShopName" id="txtShopName" /></td>
  </tr>
  <tr>
    <td width="238">Registration number of your shop</td>
    <td width="376"><label for="txtShopReg"></label>
      <input type="text" name="txtShopReg" id="txtShopReg" /></td>
  </tr>
  <tr>
    <td>Email Address</td>
    <td><label for="txtEmail"></label>
      <input type="text" name="txtEmail" id="txtEmail" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><label for="txtPassword"></label>
      <input type="password" name="txtPassword" id="txtPassword" /></td>
  </tr>
  <tr>
    <td>Confrim Password</td>
    <td><label for="txtConfirmPassword"></label>
      <input type="password" name="txtConfirmPassword" id="txtConfirmPassword" /></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><label for="txtAddress"></label>
      <input type="text" name="txtAddress" id="txtAddress" /></td>
  </tr>
  <tr>
    <td>National Identity Card Number</td>
    <td><label for="txtDate"></label>
      <input type="text" name="txtNID" id="txtNID" /></td>
  </tr>
  <tr>
    <td>Contact Number</td>
    <td><label for="txtContact"></label>
      <input type="text" name="txtContact" id="txtContact" /></td>
  </tr>


    <td height="71"><input type="submit" name="btnSubmit" id="btnSubmit" value="Sign In" onClick="validateAll()" /></td>
  <td height="71">
  <div class="Acc">
    <a href="acc.php"> Already have an account?<br>
     Log in!</a>
</div> 
</td>
  </tr>

</table>
</form>
<h5 style="margin-left: 20px; color: rgb(2, 7, 103); font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> <mark> By creating an account on this web site you have agreed to the<a href="terms.html" style="color: red;">
  terms and conditions</a> of the Speedy Tire PRO company. </mark></h5><br>
</div>
<br><br><br>
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
