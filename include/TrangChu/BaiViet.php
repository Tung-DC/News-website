<?php
	$category=category();
	foreach($category as $row)
	{
		$baiviet_moinhat=baiviet_moinhat($row['CategoryID']);
		
?>
<div class="single_post_content">
            <h2><span><?php echo $row['CategoryName']?></span></h2>
            <?php foreach($baiviet_moinhat as $row2)
					{
			?>
            <div class="single_post_content_left"> <!-- single_post_content_left-->
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                
                  <figure class="bsbig_fig"> <a href="?page=chi-tiet-bai-viet&&ArticleID=<?php echo $row2['ArticleID'] ?>&&CategoryID=<?php echo $row2['CategoryID'] ?> " class="featured_img"> <img alt="" src="upload/<?php echo $row2['Img'] ?>" width="660px"  height="280px"> <span class="overlay"></span> </a>
                    <figcaption> <a href="pages/single_page.html"><?php echo $row2['Title']?></a> </figcaption>
                    <p><?php echo $row2['Description']?></p>
                  </figure>
                </li>
              </ul>
            </div><!--END  single_post_content_left-->
            <?php
					}
					
					
			?>
            <div class="single_post_content_right">
              <ul class="spost_nav">
              <?php
              		$baiviet_4moinhat=baiviet_4moinhat($row['CategoryID']);
					foreach($baiviet_4moinhat as $row3)
					{
			  ?>
                <li>
                  <div class="media wow fadeInDown"> <a href="?page=chi-tiet-bai-viet&&ArticleID=<?php echo $row3['ArticleID'] ?>&&CategoryID=<?php echo $row3['CategoryID'] ?> " class="media-left"> <img alt="" src="upload/<?php echo $row3['Img']?>"> </a>
                    <div class="media-body"> <a href="?page=chi-tiet-bai-viet&&ArticleID=<?php echo $row3['ArticleID'] ?>&&CategoryID=<?php echo $row3['CategoryID'] ?> " class="catg_title"> <?php echo $row3['Title']?></a> </div>
                  </div>
                </li>
               
                <?php
					}
				?>
              </ul>
            </div>
          </div>
          
     <?php
		
	}
	 ?>