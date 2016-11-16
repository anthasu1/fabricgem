<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Fabric Gem</title>

<link rel="stylesheet" href="css/html5reset.css">

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

<link href="https://fonts.googleapis.com/css?family=Roboto:300|Source+Sans+Pro:300" rel="stylesheet">

<link rel="stylesheet" href="css/styles.css">

<?php include 'includes/db_connect.php'; ?>

</head>

<body>

<div class="page-container">
    <div class="custom-wrapper pure-g" id="menu">
        <div class="pure-u-1 pure-u-lg-1-3">
            <div class="pure-menu">
                <div class="menu-spacer">
                	<a href="home.php"><img src="img/fabricgem_logo1.png" alt="Fabric Gem" width="250"/></a>
                </div>
                <a class="custom-toggle" id="toggle"><img src="img/ham.png" width="30"></a>
            </div>
        </div>
        <div class="pure-u-1 pure-u-lg-1-3">
            <div class="pure-menu pure-menu-horizontal custom-can-transform nav">
                <ul class="pure-menu-list">
                    <li class="pure-menu-item"><a href="home.php" class="pure-menu-link">Home</a></li>
                    <li class="pure-menu-item"><a href="catalog.php" class="pure-menu-link">Catalog</a></li>
                    <li class="pure-menu-item"><a href="aboutus.php" class="pure-menu-link">About Us</a></li>
                    <li class="pure-menu-item"><a href="account.php" class="pure-menu-link">Account</a></li>
                </ul>
            </div>
        </div>
        <div class="pure-u-1 pure-u-lg-1-3">
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
         	<div class="about_intro">
            <h3>ABOUT US:</h3><br><br>
            	Fabric Gem carries all of the high quality, fashion fabrics you may need for your personal or professional sewing projects. Create beautiful clothing and more with our large selection of fabrics, cloth, patterns, and sewing materials.  We carry a variety of different fabrics and materials from different brands and designers. Whether you’re looking for felt, silk, lace, or something else entirely, you’ll find it here at Fabric Gem. We also offer our fabrics in any amount you might need from half a yard to a hundred yards. As far as shipping goes, we have a variety of shipping options to fit any project and budget, including “next day air” for any last minute purchases or time sensitive cases. Not only that, but we offer the very best in customer service. If you have any questions regarding your order or need help with you projects, you can always message one of our fabric experts for professional help and advice. Our fabrics are chosen for their high quality and unique designs that are sure to excite and inspire. With Fabric Gem, your sewing projects are sure to be a simple and easy success. <br><br><br>
              <h3>THE TEAM:</h3><br>
             
            </div>
        </div>
        
        <div class="pure-u-1 pure-u-md-1-3">
        	<div class="team_photos">
                <img src="img/joe.png"  alt="image of team member, Joe"/> <br>
            </div>
        </div>
        
        <div class="pure-u-1 pure-u-md-1-3">
        	<div class="team_bios">
            	<h3>JOE</h3><br>
                Joe is the Fabric Gem Team Leader and Head of Coding. He attends UCF, pursuing a degree in Digital Media - Web Design, and lives in Orlando, Florida. In his free time, Joe enjoys caring for and playing with his 27 cats. Coffee is the life blood that keeps him going.<br>
            
            </div>
        </div>
        
        <div class="pure-u-1 pure-u-md-1-3">
        	<div class="team_photos">
                <img src="img/tyler.png"  alt="image of team member, Tyler"/> <br>
            </div>
        </div>
        
        <div class="pure-u-1 pure-u-md-1-3">
        	<div class="team_bios">
            	<h3>TYLER</h3><br>
            		Tyler is the Second in Command of Coding at Fabric Gem. He attends UCF, pursuing a degree in Digital Media - Web Design, and lives in Orlando, Florida. In his free time, Tyler enjoys listening to music by one of his favorite bands, The 1975 as well as attending concerts.<br>
            </div>
        </div>
        
        <div class="pure-u-1 pure-u-md-1-3">
        	<div class="team_photos">
                <img src="img/summer.png"  alt="image of team member, Summer"/> <br>
            </div>
        </div>
        
        <div class="pure-u-1 pure-u-md-1-3">
        	<div class="team_bios">
            	<h3>SUMMER</h3><br>
             		Summer is the Fabric Gem Lead Designer. She attends UCF, pursuing a degree in Digital Media - Web Design, and lives in Orlando, Florida. In her free time, Summer enjoys reading, traveling, art related endeavors and playing with her cat. Summer also runs on coffee.<br>
            </div>
        </div>
        
        <div class="pure-u-1 pure-u-md-1-3">
        	<div class="team_photos">
                <img src="img/dani.png"  alt="image of team member, Dani"/> <br>
            </div>
        </div>
        
        <div class="pure-u-1 pure-u-md-1-3">
        	<div class="team_bios">
            	<h3>DANI</h3><br>
            	Dani is the Fabric Gem Head of Testing and User Cases. She attends UCF, pursuing a degree in Digital Media - Web Design, and lives in Orlando, Florida. In her free time, Dani enjoys playing with her dog and spending time with her fiance. 
            </div><br>
        </div>
        
         <div class="pure-u-1 pure-u-md-1-3">
        	<div class="team_photos">
                <img src="img/brittany.png"  alt="image of team member, Brittany"/>
            </div>
        </div>
        
        <div class="pure-u-1 pure-u-md-1-3">
        	<div class="team_bios">
            	<h3>BRITTANY</h3><br>
            	Brittany is the Fabric Gem Lead Manager of Databases. She attends UCF, pursuing a degree in Digital Media - Web Design, and lives in Orlando, Florida. In her free time, Brittany enjoys collecting cacti and petting stray dogs.
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
