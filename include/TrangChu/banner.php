<div class="slick_slider">
		<?php
        	$banner=banner();
			foreach ($banner as $row)
			{
		?>
          <div class="single_iteam"> <a href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row['CategoryID']?>&&ArticleID=<?php echo $row['ArticleID']?>"> <img src="upload/<?php echo $row['Img']?>" alt="" height="50px"></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row['CategoryID']?>&&ArticleID=<?php echo $row['ArticleID']?>"><h4><?php echo $row['Title']?></h4></a></h2>
              <p><?php echo $row['Description']?></p>
            </div>
          </div>
          
          <?php 
			}
		  ?>
</div>