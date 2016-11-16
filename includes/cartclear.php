<?php
include_once("includes/db_connect.php"); //include config file

unset($_SESSION["cartarray"]);

header("location: cart.php");
