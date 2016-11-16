<?php
include_once("includes/db_connect.php"); //include config file

//add product to session or create new one
if(isset($_POST["type"]) && $_POST["type"]=='add' && $_POST["qty"]>0)
{

	array_push($_SESSION["cartarray"], $_POST["sku"]);

    }

if(isset($_POST["qty"]) || isset($_POST["remove_code"]))
{
    //update item quantity in product session
    if(isset($_POST["qty"]) && is_array($_POST["_qty"])){
        foreach($_POST["qty"] as $key => $value){
            if(is_numeric($value)){
                $_SESSION["cart_products"][$key]["qty"] = $value;
            }
        }
    }
    //remove an item from product session
    if(isset($_POST["remove_code"]) && is_array($_POST["remove_code"])){
        foreach($_POST["remove_code"] as $key){
            unset($_SESSION["cart_products"][$key]);
        }   
    }
}

//back to return url
header('Location:cart.php');