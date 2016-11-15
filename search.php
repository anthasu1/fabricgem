<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php include 'includes/db_connect.php'; ?>

</head>


<body>

<?php

    $query = $_GET['query']; 
    // gets value sent over search form
     	 
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt
		 
        $sql = "SELECT * FROM products WHERE name LIKE '%".mysql_real_escape_string($query)."%'";
		
		echo $query;
		
		$result=mysql_query($sql); 
		
		while($row=mysql_fetch_array($result)){ 
	         ?><div><strong><?php echo $row["name"]; ?></strong></div><?php
		}
	}
        
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>
</body>
</html>