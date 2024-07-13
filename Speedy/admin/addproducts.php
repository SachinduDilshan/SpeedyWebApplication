<?php 
session_start();
require_once '../connection.php';


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Products to Store</title>
    <link rel="stylesheet" href="adminstyle.css" type="text/css">
    
      <style>
  body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;

} 

.burger{
  display: none;
}
.burger div{
  width: 25px;
  height: 3px;
  background: #fff;
  margin: 5px;
  transition:all 0.5s ease;
}
@media only screen and (max-width: 760px){
   nav{
    justify-content: space-between;
    padding: 0 5vw;
  }
  .nav-links{
    position: absolute;
    right: 0;
    top:8vh;
    min-height:92vh;
    background: #333;
    display: flex;
    flex-direction: column;
    align-items: center;   
    width: 50%;
    margin: 0;
    padding: 0;
    transform: translateX(100%);
    transition:All 0.5s ease-in;
  }
  .nav-links a{
    opacity: 0;
 
  }
  .burger{
    display: block;
  }
 
}
@media only screen and (max-width: 640px){
  nav{
    justify-content: space-between;
    padding: 0 5vw;
  }
}
.nav-active{
  transform: translateX(0);
}
@media only screen and (max-width: 460px){
  .nav-links{
    width: 100%;
    transition:All 0.5s ease;
  }
}
.nav-active{
  transform: translateX(0);
}
@keyframes navLinkFade{
  from{
    opacity: 0;
    transform: translateX(50px);
  }
  to{
    opacity: 1;
    transform: translateX(0);
  }
}
.toggle .line1{
   transform: rotate(-45deg) translate(-5px,6px );
}
.toggle .line2{
   opacity: 0;
}
.toggle .line3{
   transform: rotate(45deg) translate(-5px,-6px );
}
    </style>
</head>

<body>

<div class="container">
        <header>
            <h1>Admin Store</h1>
        </header>
        <nav>
            <ul>
                <li><a href="admin.php">Admin Dashboard</a></li>
                <li><a href="addproducts.php">Products</a></li>
                <li><a href="orders.php">Customer Orders</a></li>
                <li><a href="seecustomers.php">Customers</a></li>
                <li><a href="msgs.php">Messages</a></li>
            </ul>
        </nav>

          
    <div class="form-style-5">
<form action="addproducts.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend><span class="number"></span>Add a Product to Store </legend>

  <input type="text" name="txtTitle" placeholder="Product Name " required><br><br><br>
  <textarea name="txtDescription" placeholder="Describe about the product"></textarea><br><br><br>
  <input type="file" name="imageFile" placeholder="Upload a Picture" required> <br><br>
  <input type="text" id="price" name="price" placeholder="Price of product" require>
  
<p>
  <input type="submit" value="Add Post" name="btnSubmit"/>
</p>
</fieldset>
<?php
	 if(isset($_POST["btnSubmit"]))
			{
				$productname = $_POST["txtTitle"];
				$description = $_POST["txtDescription"];
        $price= $_POST['price'];
       

				$image = "../store/".basename($_FILES["imageFile"]["name"]);
			  move_uploaded_file($_FILES["imageFile"]["tmp_name"],$image);
        

			  if(!$db)
			   {	
				die("Cannot upload the file, Please choose another file");		
			   }

			   $sql = "INSERT INTO `shop`( `productname`, `productdescription`, `image`, `price`) 
         VALUES ( '".$productname."', '".$description."', '".$image."','".$price."');";

	      if(mysqli_query($db,$sql))
          {
          echo "Product Uploaded Successfully";
          }
       else
            {
              echo "Opps something is wrong, Please select the file again";
            }
              }
    
    ?>
	
</form>
</div>
</body>
</html>