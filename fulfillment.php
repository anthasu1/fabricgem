<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Fabric Gem Fulfillment - Summer Brooker</title>

  <!-- link stylesheets -->
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <!--link fonts -->
   <link href="https://fonts.googleapis.com/css?family=Roboto|Slabo+27px|Source+Sans+Pro:300,400" rel="stylesheet">
</head>
<body>
    <div class="section group_header">
        <div class="col span_1_of_2">
        	<a href="home.php"><img src="img/fabricgem_logo_small.png" class="logo" alt=""/></a>
        </div>
        <div class="col span_1_of_2">
        	<div id="navbar">
              
              <ul id="topnav">
                  <li><a href="home.php">Home</a></li>
                  <li><a href="catalog.php">Catalog</a></li>
                  <li><a href="client.php">Client</a></li>
                  <li><a href="admin.php">Admin</a></li>
                  <li></li>
                  <input type="text" name="search" placeholder="search">  <input type="submit" value=" > ">
                  <li></li>
                  <a href="cart.php"><img src="img/cart_icon_small.png" alt=""/></a>
              </ul>
           </div>
      </div>
     </div>
     
      <div class="section group_hr">
     	<div class="col span_2_of_2">
        	<hr>
        </div>
     </div>
     
      <div class="section group_maincontent">
     	<div class="col span_2_of_2">
        	<div class="main">
                
                <form>
                  First name:<br>
                  <input class="fulfill" type="text" name="firstname" >
                  <br>
                  Last name:<br>
                  <input class="fulfill" type="text" name="lastname" >
                  <br>
                  Street Address:<br>
                  <input class="fulfill" type="text" name="address" >
                  <br>
                  City:<br>
                  <input class="fulfill" type="text" name="city" >
                  <br>
                  Zip Code:<br>
                  <input class="fulfill" type="text" name="zip" >
                  <br>
                  Country:
                  <select>
                      <option value="us">United States</option>
                      <option value="aus">Australia</option>
                      <option value="uk">United Kingdom</option>
                      <option value="nz">New Zealand</option>
                   </select>
                  <br>
                  Card Number:<br>
                  <input class="fulfill" type="text" name="card" >
                  <br><br>
                  <input class="submit_btn" type="submit" value="Submit">
                </form>
                
                
                
            </div>
        </div>
     </div>
     
     <div class="section group_footer">
     	<div class="col span_2_of_2">
        	<div id="footer">
            <ul>
             <li><a href="home.php" class="footer_a">Home</a></li>
              <li><a href="catalog.php" class="footer_a">Catalog</a></li>
              <li><a href="client.php" class="footer_a">Client</a></li>
              <li><a href="admin.php" class="footer_a">Admin</a></li>
              <li><a href="cart.php" class="footer_a">Cart</a></li>
              <li><a href="fulfillment.php" class="footer_a">Fulfillment</a></li>
             </ul>
             
             <img src="img/social_media.png" class="center" alt=""/> <br>
            
            <h3>Site Design © Summer Brooker 2016. | This site was created for a class at UCF and is for educational purposes only. It does not actually sell anything.</h3>
            </div>
        </div>
     </div>

</body>
</html>