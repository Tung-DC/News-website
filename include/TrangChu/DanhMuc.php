
<?php 

		$category=category();
		foreach($category as $row)
		{
?>
			<li><a href="?page=list-bai-viet&&CategoryID=<?php echo $row['CategoryID']?>"><?php echo $row['CategoryName']?></a></li>	
          	
          
          <?php }
		  ?>