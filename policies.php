<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Fabric Gem</title>

<link rel="stylesheet" href="css/html5reset.css">

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

<link href="https://fonts.googleapis.com/css?family=Roboto:300|Source+Sans+Pro" rel="stylesheet">

<link rel="stylesheet" href="css/styles.css">

<?php include 'includes/db_connect.php'; ?>

</head>

<body>

<div class="page-container">
    <div class="custom-wrapper pure-g" id="menu">
        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pure-menu">
                <div class="menu-spacer">
                	<a href="home.php"><img src="img/fabricgem_logo1.png" alt="Fabric Gem" width="250"/></a>
                </div>
                <a class="custom-toggle" id="toggle"><img src="img/ham.png" width="30"></a>
            </div>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pure-menu pure-menu-horizontal custom-can-transform nav">
                <ul class="pure-menu-list">
                    <li class="pure-menu-item"><a href="home.php" class="pure-menu-link">Home</a></li>
                    <li class="pure-menu-item"><a href="catalog.php" class="pure-menu-link">Catalog</a></li>
                    <li class="pure-menu-item"><a href="aboutus.php" class="pure-menu-link">About Us</a></li>
                    <li class="pure-menu-item"><a href="account.php" class="pure-menu-link">Account</a></li>
                </ul>
            </div>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pure-menu pure-menu-horizontal custom-menu-3 custom-can-transform nav">
                <ul class="pure-menu-list">
                    <li class="pure-menu-item" id="search">
                        <form action="search.php" method="GET">
                            <input type="text" name="query" />
                            <input type="submit" value="Search" />
                        </form>
                    </li>
                    <li class="pure-menu-item" id="cart-image"><a href="cart.php" class="pure-menu-link"><img src="img/cart_icon_large.png" width="32" height="32"></a></li>
                    <li class="pure-menu-item" id="cart-text"><a href="cart.php" class="pure-menu-link">Cart</a></li>

                    
                </ul>
            </div>
        </div>
    </div>
    
    <div class="body-wrapper">
    	<div class="pure-u-1 pure-u-md-3-3">
            <div class="pol_content">
            	 <h3>COMPANY POLICIES:</h3><br>
                 <h3>Shipping policy and Charges</h3><br>
                    
                        Most orders will ship out within two days of purchase.
                        We then determine the most efficient shipping carrier for your order. Some carriers that
                        may be used are the U.S. Postal Service (USPS), United Parcel Service (UPS) or
                        FedEx. Unfortunately, we do not ship to P.O. Boxes.
                        In order to estimate delivery times, please note the
                        following:
                        Credit card authorization and verification must be received prior to processing.
                        Federal Express and UPS deliveries occur Monday through Friday, excluding
                        holidays.<br><br>
                  
                     
                 
                 <h3>Tax policy</h3><br>
                 
                 		As Fabric Gem is based in Orlando, Florida, we are required to collect sales tax on orders that are shipped 						to an address in Florida. Florida’s sales tax rate is a sum of the state rate, 6%, plus a discretionary 						                        sales tax surtax. The discretionary sales surtax rate depends on the county. Rates range from 0.5% to    		                        1.5%. Few counties do not impose any surtax. Florida is a destination-based sales tax state. Therefore,		                        the rate we charge is based on the address where the taxable item is delivered. Shipping fees are taxable 	                        as well.<br><br>
                 
                 <h3>Return policy</h3><br>
                 
                 		 We offer 30 Day Money Back Guarantee on all products. Included in your shipment will be a return sticker 		                         and form to be used if needed. You may also call customer service at (000)000-0000
                        
                        All refunds will be provided as a credit to the credit card used at the time of
                        purchase within 5-7 business days after we have recieved of the returned
                        merchandise.<br><br>
                 
                 <h3>Privacy Policy</h3><br>
                 
                 		We respect and are committed to protecting our user's privacy. We may collect
                        personally identifiable information when you visit our site in order to create user accounts, process 		                        payments, and ship purchases. Fabric Gem also automatically
                        receives and records information from your browser including
                        cookie information, IP addresses, and the page(s) you visited. We will not give out or sell
                        your personally identifiable information to any other parties. <br><br>
                 
                 <h3>Security Statement</h3><br>
                 
                 		User payment and personal information is always safe. Our Secure Sockets
                        Layer (SSL) software is the industry standard and among the best software
                        available today for secure commerce transactions. It encrypts all personal
                        information, including credit card number, name, and address, so that it cannot
                        be read by any parties over the internet.
                
            </div>

   		</div>
    </div>
    
    <div class="pure-g footer">
        
        <div class="pure-u-1 social">
            <a href="https://www.facebook.com"><img src="img/social_media _fb.png" alt="facebook icon"/></a>
            <a href="https://www.Twitter.com"><img src="img/social_media_twitter.png" alt="twitter icon"/></a>
            <a href="https://www.google.com"><img src="img/social_media_google.png" alt="google icon"/></a>
            <a href="https://www.pinterest.com"><img src="img/social_media_pinterest.png" alt="pinterest icon"/></a>
         </div>
        
        <div class="pure-u-1 disclaimer">
        	<a href="policies.php" class="footer_link">Company Policies</a><br><br>
        
            <p>Site Design © Team FabricGem 2016. | This site was created for a class at UCF and is for educational purposes only. It does not actually sell anything.</p><br>
        </div>
    </div>
</div> 
    
<script src="js/menu-scrolly.js"></script>

</body>
</html>