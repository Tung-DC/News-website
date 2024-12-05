<div class="single_sidebar">
            <h2><span>Bài Viết Nổi Bật</span></h2>
            <ul class="spost_nav">
            <?php
            	$Top4BaiVietNoiBat=Top4BaiVietNoiBat();
				foreach($Top4BaiVietNoiBat as $row)
				{
			?>
              <li>
                <div class="media wow fadeInDown"> 
                <a href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row['CategoryID']?>&&ArticleID=<?php echo $row['ArticleID']?>" class="media-left"> 
                	<img alt="" src="upload/<?php echo $row['Img']?>"> 
                </a>
                  <div class="media-body"> 
                  <a href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row['CategoryID']?>&&ArticleID=<?php echo $row['ArticleID']?>" class="catg_title">
                   <?php echo $row['Title']?>
                   </a> </div>
                </div>
              </li>
              <?php 
				}
			  ?>
            </ul>
          </div>