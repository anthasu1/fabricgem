<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Fabric Gem</title>

<link rel="stylesheet" href="css/html5reset.css">

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

<link rel="stylesheet" href="css/styles.css">

<script src="js/menu.js"></script>

<?php include 'includes/db_connect.php'; ?>

</head>

<body>

<div class="custom-wrapper pure-g" id="menu">
    <div class="pure-u-1 pure-u-md-1-3">
        <div class="pure-menu">
            <div class="menu-spacer"></div>
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
                <li class="pure-menu-item" id="search"><input><button>Search</button></li>
                <li class="pure-menu-item" id="cart-image"><a href="cart.html" class="pure-menu-link"><img src="img/cart.png" width="32" height="32"></a></li>
                <li class="pure-menu-item" id="cart-text"><a href="cart.html" class="pure-menu-link">Cart</a></li>
                
            </ul>
        </div>
    </div>
</div>

<div class="body-wrapper">

<?php include 'includes/catalog-gen.php'; ?>

</div>

<div class="pure-g footer">
	
    <div class="pure-u-1 social">
        <img src="https://placekitten.com/60/60">
        <img src="https://placekitten.com/60/60">
        <img src="https://placekitten.com/60/60">
        <img src="https://placekitten.com/60/60">
    </div>
	
    <div class="pure-u-1 disclaimer">
		<p>Site Design © Team FabricGem 2016. | This site was created for a class at UCF and is for educational purposes only. It does not actually sell anything.</p>
    </div>
</div>
    
<script>
(function (window, document) {
var menu = document.getElementById('menu'),
    WINDOW_CHANGE_EVENT = ('onorientationchange' in window) ? 'orientationchange':'resize';

function toggleHorizontal() {
    [].forEach.call(
        document.getElementById('menu').querySelectorAll('.custom-can-transform'),
        function(el){
            el.classList.toggle('pure-menu-horizontal');
        }
    );
};

function toggleMenu() {
    // set timeout so that the panel has a chance to roll up
    // before the menu switches states
    if (menu.classList.contains('open')) {
        setTimeout(toggleHorizontal, 500);
    }
    else {
        toggleHorizontal();
    }
    menu.classList.toggle('open');
    document.getElementById('toggle').classList.toggle('x');
};

function closeMenu() {
    if (menu.classList.contains('open')) {
        toggleMenu();
    }
}

document.getElementById('toggle').addEventListener('click', function (e) {
    toggleMenu();
});

window.addEventListener(WINDOW_CHANGE_EVENT, closeMenu);
})(this, this.document);

</script>
</body>
</html>
