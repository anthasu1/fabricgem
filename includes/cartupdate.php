<?php
include_once("includes/db_connect.php"); //include config file

if(!isset($_SESSION["cartarray"])) $_SESSION["cartarray"] = array();

//add product to session or create new one
if(isset($_POST["type"]) && $_POST["type"]=='add' && $_POST["qty"]>0)
{
	
	$code = $_POST["sku"];
	
	$newproduct = new stdClass();
   	$newproduct -> name = $_POST['name'];
	$newproduct -> price = $_POST['price'];
   	$newproduct -> qty = $_POST['qty'];
	$newproduct -> sku = $_POST['sku'];
	
	array_push($_SESSION["cartarray"], $newproduct);
	
	print_r($_SESSION["cartarray"]);

	header("location: cart.php");
}

else{ 
	return false; }

