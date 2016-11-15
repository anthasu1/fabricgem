<!-- Display Catalog -->

<?php
	$results_per_page = 30; // number of results per page

	
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
            
            <div class="pure-g">
            
            <?php
				
		}
	?> 
    
    
    <div class="product-item pure-u-1-3">
        <form method="post" action="catalog.php?action=add&code=<?php echo $row["sku"]; ?>">
        
        <!--<div class="product-image"><img src="<?php /*echo $row["image"]; */?>"></div>-->
        
        <div class="product-image"><img src="https://placekitten.com/100/100"></div>
        
        <div><strong><?php echo $row["name"]; ?></strong></div>
        
        <div class="product-price"><?php echo "$".$row["price"]; ?></div>
        
        <div class="product-stock"><?php echo "Currently in stock: ".$row["stock"]; ?></div>
        
        <div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
        </form>
	</div>
			
	<?php 
	
	if($count==3){
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
	
	mysql_close($conn);

?>

<style>
	
	.pages { text-align: right; 
			 padding-top: 10px;
			 padding-bottom: 10px; }
	
	.pages a{ padding-right: 20px; }
	
	.product-item{ text-align: center; }
	
</style>