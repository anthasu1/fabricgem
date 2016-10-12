<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Fabric Gem Home - Summer Brooker</title>
    <!-- link stylesheets -->
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <!--link fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Slabo+27px|Source+Sans+Pro:300,400" rel="stylesheet">
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
               
                <img src="img/promo_image_1.png" class="center" alt=""/><br>
                
                <h3>FEATURED PRODUCT:</h3>
                
                
<?php
					$con = mysql_connect("sulley.cah.ucf.edu","su173044","8E6FAED9C30C4D068D4B5258E48B2686");
					if (!$con) {
					die("Can not Connect: " . mysql_error());
					}
					mysql_select_db("dig4530c0001",$con);
					
					$sql = "SELECT * FROM products WHERE product_id = '1'";
					$myData = mysql_query($sql,$con);
					
					?>
					
					<table>
					<tbody>
					<?php
					
					while($row = mysql_fetch_array($myData)){
					echo "<tr>";
					echo "<td>" . $row['product_id'] . "</td>";
					echo "<td>" . $row['product_name'] . "</td>";
					echo "<td>" . $row['description'] . "</td>";
					echo "<td>" . $row['category'] . "</td>";
					echo "<td>" . $row['cost'] . "</td>";
					echo "<td>" . $row['price'] . "</td>";
					echo "<td>" . $row['stock'] . "</td>";
					echo "<td>" . $row['sku'] . "</td>";
					echo "<td><img src='".$row['image']."' width='150' height='100' />" . "</td>";
					echo "</tr>";
					}
        
                ?>
              	</tbody>
				</table>
              
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