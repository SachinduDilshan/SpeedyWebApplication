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
    <title>Store-Speedy Tire PRO</title>
    <link rel="stylesheet" type="text/css" href="store.css">
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
        <h1>Our Store...</h1>
    </div> 
            <div class="products">
              <div class="product">
                <img src="store/90-90-12.jpeg" alt="Product 1">
                <div class="product-info">
                <h3>CEAT 90/90-12 (4PR) ZOOM D FRONT T/L (SRI LANKA)</h3></div>
                <p>Rs.5 486.00</p>
                <button class="add-to-cart-btn" onclick="addToCart('CEAT 90/90-12 (4PR) ZOOM D FRONT T/L (SRI LANKA)', 5486.00)">Add to Cart</button>
              </div>
              <div class="product">
                <img src="store/175.jpeg" alt="Product 2">
                <div class="product-info">
                <h3>CEAT 175/65 R15 (4PR) MILAZE LN 84H (SRI LANKA)</h3></div>
                <p>Rs.115 486.00</p>
                <button class="add-to-cart-btn" onclick="addToCart('CEAT 175/65 R15 (4PR) MILAZE LN 84H (SRI LANKA)', 115486)">Add to Cart</button>
              </div>
              <div class="product">
                <img src="store/90-100-10.jpeg" alt="Product 3">
                <div class="product-info">
                <h3>CEAT 90/100-10 (4PR) GRIPP X3 T/L (SRI LANKA)</h3></div>
                <p>Rs.8 486.00</p>
                <button class="add-to-cart-btn" onclick="addToCart('CEAT 90/100-10 (4PR) GRIPP X3 T/L (SRI LANKA)', 8486)">Add to Cart</button>
              </div>
              <div class="product">
                <img src="store/140-70-18.jpeg" alt="Product 4">
                <div class="product-info">
                <h3>CEAT 140/70-17 ZOOM XL REAR T/L (SRI LANKA)</h3></div>
                <p>Rs. 15 642.00</p>
                <button class="add-to-cart-btn"  onclick="addToCart('CEAT 140/70-17 ZOOM XL REAR T/L (SRI LANKA)', 15642)">Add to Cart</button>
              </div>
              <div class="product">
                <img src="store/155-80.jpeg" alt="Product 5">
                <div class="product-info">
                <h3>CEAT 155/80 R12 (4PR) FUELSMARRT 77T (SRI LANKA)</h3></div>
                <p>Rs. 22 580.00</p>
                <button class="add-to-cart-btn" onclick="addToCart('CEAT 155/80 R12 (4PR) FUELSMARRT 77T (SRI LANKA)', 22580)">Add to Cart</button>
              </div>
              <div class="product">
                <img src="store/300-18tl.jpeg" alt="Product 6">
                <div class="product-info">
                <h3>CEAT 300-18 (6PR) GRIPP X3 T/L (SRI LANKA)</h3></div>
                <p>Rs. 8 877.00</p>
                <button class="add-to-cart-btn" onclick="addToCart('CEAT 300-18 (6PR) GRIPP X3 T/L (SRI LANKA)', 8877)">Add to Cart</button>
              </div>
              <div class="product">
                <img src="store/300-18.jpeg" alt="Product 7">
                <div class="product-info">
                <h3>CEAT 300-18 (6PR) GRIPP REAR T/T (SRI LANKA)</h3></div>
                <p>Rs. 9 877.00</p>
                <button  class="add-to-cart-btn" onclick="addToCart('CEAT 300-18 (6PR) GRIPP REAR T/T (SRI LANKA)', 9877)">Add to Cart</button>
              </div>
              <div class="product">
                <img src="store/bus.jpeg" alt="Product 8">
                <div class="product-info">
                <h3>CEAT 1000-20 (18PR) MILE XL (SRI LANKA)</h3></div>
                <p>Rs. 111 140.00</p>
                <button class="add-to-cart-btn" onclick="addToCart('CEAT 1000-20 (18PR) MILE XL (SRI LANKA)', 111140)">Add to Cart</button>
              </div>
              <div class="column">

<?php

$sql = "SELECT * FROM `shop`";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    $row["pid"];
?>

    <div class="row">
    <div class="products">
    <div class="product">
      <img src="<?php echo ($row["image"]) ?>" style="width:100%" >
      <div class="container">
        <h3><?php echo ($row["productname"]) ?></h3>        
        <h3><?php echo ($row["productdescription"]) ?> </h3>
		    <p><?php echo ($row["price"]) ?></p>
        <button class="add-to-cart-btn"  onclick="addToCart(productName,price)">Add to Cart</button>
  </div>
      </div>
    </div>  
  </div>

<?php

  }


}

?>

            </div>
</div>     
  <div class="store" style="margin-left: 35px;">
      <div class="cart">
      <h2 style="color: rgb(3, 181, 9);">Your Shopping Cart</h2>
      <div id="cart-items" name="cart-items"></div>
      <h3 style="color: rgb(195, 4, 4);">Total Price: <span id="total-price">Rs. 0.00</span></h3>

      <div class="payment-methods">
        <form action="Handler/buyhandler.php" method="post" class="payment-form" id="payment-form">

          <label for="payment-method-select">Select a payment Method:</label>
          <select id="payment-method-select" name="payment-method-select" class="payment-method">
            <option value="credit-card">Credit Card</option>
            <option value="Cash">Cash</option>
            <option value="Cheque">Cheque</option>
          </select><br><br>
            <div class="row">
          <div id="credit-card-fields">
            <label for="cardholder-name">Cardholder Name:</label>
            <input type="text" id="cardholder-name" name="cardname" required><br><br>
            <label for="card-number">Card Number:</label>
            <input type="text" id="card-number" name="cardnum" required><br><br>
            <label for="expiration-date">Expiration Date:</label>
            <input type="date" id="expiration-date" name="expdate" required><br><br>
          </div>
        </div>
          <div id="Cash-fields">
            <label for="Cash-amount"> Cash Amount:</label>
            <input type="text" id="Cash-amount" name="cash" required>
          </div>
          <div id="Cheque-fields">
          </div><br>
          <input type="submit" value="Buy" name="buyButon" style="background-color: rgb(4, 174, 21); margin-bottom: 20px;" class="checkout-btn" onclick="checkout()"/>
        </form>
      </div>
    </div>
  </div>

  <script>
    // JavaScript logic for the store page
    let cartItems = [];

    function addToCart(productName, price) {
      cartItems.push({ productName, price });
      renderCartItems();
    }

    function renderCartItems() {
  const cartItemsDiv = document.getElementById("cart-items");
  cartItemsDiv.innerHTML = "";
  for (const item of cartItems) {
    const cartItemDiv = document.createElement("div");
    cartItemDiv.className = "cart-item";
    const itemInfoDiv = document.createElement("div");
    itemInfoDiv.className = "cart-item-info";
    const itemName = document.createElement("h3");
    itemName.textContent = item.productName;
    const itemPrice = document.createElement("h3");
    itemPrice.textContent = `Rs. ${item.price.toFixed(2)}`;
    itemInfoDiv.appendChild(itemName);
    itemInfoDiv.appendChild(itemPrice);
    cartItemDiv.appendChild(itemInfoDiv);
    cartItemsDiv.appendChild(cartItemDiv);
  }

  updateTotalPrice();
}

function updateTotalPrice() {
  let totalPrice = 0;
  for (const item of cartItems) {
    totalPrice += item.price;
  }
  const totalPriceElement = document.getElementById("total-price");
  totalPriceElement.textContent = `Rs. ${totalPrice.toFixed(2)}`;
  
}

       

    function checkout() {
      const selectedPaymentMethod = document.getElementById("payment-method-select").value;
      // Perform necessary actions for the selected payment method
      if (selectedPaymentMethod === "credit-card") {
        const cardholderName = document.getElementById("cardholder-name").value;
        const cardNumber = document.getElementById("card-number").value;
        const expirationDate = document.getElementById("expiration-date").value;
        const cvv = document.getElementById("cvv").value;
        // Perform credit card validation and payment processing
        console.log("Credit Card Details:", cardholderName, cardNumber, expirationDate, cvv);
      } else if (selectedPaymentMethod === "Cash") {
        const cash = document.getElementById("Cash-email").value;
        // Perform Cash validation and payment processing
        console.log("Pay cash on delivery: ", cash);
      } else if (selectedPaymentMethod === "Cheque") {
        const ChequeAddress = document.getElementById("Cheque-address").value;
        // Perform Cheque validation and payment processing
        console.log("Cheque Address:", ChequeAddress);
      }

      alert("Thank you for your purchase!");
    }

    // Show/hide payment fields based on selected payment method
    const paymentMethodSelect = document.getElementById("payment-method-select");
    const creditCardFields = document.getElementById("credit-card-fields");
    const CashFields = document.getElementById("Cash-fields");
    const ChequeFields = document.getElementById("Cheque-fields");

    paymentMethodSelect.addEventListener("change", function () {
      const selectedPaymentMethod = paymentMethodSelect.value;
      if (selectedPaymentMethod === "credit-card") {
        creditCardFields.style.display = "block";
        CashFields.style.display = "none";
        ChequeFields.style.display = "none";
      } else if (selectedPaymentMethod === "Cash") {
        creditCardFields.style.display = "none";
        CashFields.style.display = "block";
        ChequeFields.style.display = "none";
      } else if (selectedPaymentMethod === "Cheque") {
        creditCardFields.style.display = "none";
        CashFields.style.display = "block";
        ChequeFields.style.display = "block";
      }
    });
  </script>

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
  
  
  <div class="newfoo"> <h1>Need any help ? <br> CAll NOW ON : +94778880817</h1>
  <a href="chat.html">Contact US</a>
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