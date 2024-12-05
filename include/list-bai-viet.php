<?php 
	$CategoryID=$_GET['CategoryID']; //lay tren url(link);
	$category2=category2($CategoryID);
	$row_category2=$category2->fetch();

?>
<ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="?page=list-bai-viet&&CategoryID=<?php echo $row_category2['CategoryID']?>"><?php echo  $row_category2['CategoryName']?></a></li>
             
 </ol>
<?php
	
	$article=article($CategoryID);
	?>
    
    
<div class="single_post_content">
            <h2><span><?php echo  $row_category2['CategoryName']?></span></h2>
            	
<ul class="spost_nav">
		<div class="row">
        	<?php foreach($article as $row)
	{?>
        	<div class="col-md-6">
                <li>
                  <div class="media wow fadeInDown"> 
                  <a href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row_category2['CategoryID']?>&&ArticleID=<?php echo $row['ArticleID']?>" class="media-left"> <img alt="" src="upload/<?php echo $row['Img']?>"> 
                  </a>
                    <div class="media-body"> <a href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row_category2['CategoryID']?>&&ArticleID=<?php echo $row['ArticleID']?>" class="catg_title"> <?php echo $row['Title']?> </a> </div>
                  </div>
                </li>
            </div>
             <?php 
			}	
			?>
       </div><!-- row -->
</ul>

</div>