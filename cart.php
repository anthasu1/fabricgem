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
                    <li class="pure-menu-item" id="cart-image"><a href="cart.html" class="pure-menu-link"><img src="img/cart_icon_large.png" width="32" height="32"></a></li>
                    <li class="pure-menu-item" id="cart-text"><a href="cart.html" class="pure-menu-link">Cart</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
    
    <div class="body-wrapper">
    
    <?php 
	foreach($_SESSION['cartarray'] as $key=>$value)
    {
    // and print out the values
	
    	echo $value -> name;
		echo $value -> price;
		echo $value -> qty;
		echo '<br>';
    }
	?>
    
    <form method="post" action="cartclear.php">
    <input type="submit" value="Clear Cart" class="btnClear" />
    </form>

    
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
