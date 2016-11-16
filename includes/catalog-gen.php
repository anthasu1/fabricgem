<!-- Display Catalog -->

<?php
	$results_per_page = 28; // number of results per page

	
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
	$start_from = ($page-1) * $results_per_page;
	$sql = "SELECT * FROM ".$datatable." ORDER BY ID ASC LIMIT $start_from, ".$results_per_page;
	$rs_result = $conn->query($sql);
	
	$count = 0;
	?>     
    
	<?php 
	 while($row = $rs_result->fetch_assoc()) {
	
		$count++;
						
		if($count==1){
			
			?>
            
            <!-- Start Group Div -->
            
            <div class="pure-g new-row">
            
            <?php
				
		}
	?> 
    
    
    <div class="product-item pure-u-1-2 pure-u-md-1-4">
        <form method="post" action="cartupdate.php">
        
        <div class="product-image"><img src="<?php echo $row["img"]; ?>" height="150" width="150"></div>
                
        <div><strong><?php echo $row["name"]; ?></strong></div>
        
        <div class="product-price"><?php echo "$".$row["price"]."/yard"; ?></div>
        
        <div class="product-stock"><?php echo "Currently in stock: ".$row["yards"] ." yards"; ?></div>
        
        <input type="hidden" name="type" value="add" >
        
        <input type="hidden" name="sku" id="<?php echo "item".$row["sku"]."sku";?>" value="<?php echo $row["sku"];?>">
        <input type="hidden" name="name" id="<?php echo "item".$row["name"]."sku";?>" value="<?php echo $row["name"];?>">    	        
        <input type="hidden" name="price" id="<?php echo "item".$row["price"]."sku";?>" value="<?php echo $row["price"];?>">    	        
    	        
        <div><input type="text" name="qty" value="0" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
        </form>
	</div>
			
	<?php 
	
	if($count==4){
		?>
		</div>
        <!-- End Row Div -->
        
        <?php
		
		$count=0;
		
		}
	
	}; 
	
	?> 
	
	  
	<?php 
	$sql = "SELECT COUNT(ID) AS total FROM ".$datatable;
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
	  
	?>
    <div class="pages pure-u-1">  
	<?php  
	for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
				echo "<a href='catalog.php?page=".$i."'";
				if ($i==$page)  echo " class='curPage'";
				echo ">".$i."</a> "; 
	}; 
	?>
    <?php
	
	$conn->close;

?>

<style>
	
	.pages { text-align: right; 
			 padding-top: 10px;
			 padding-bottom: 10px; }
	
	.pages a{ padding-right: 20px; }
	
	.product-item{ text-align: center; }
	
</style>