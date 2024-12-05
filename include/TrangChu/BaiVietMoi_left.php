<div class="latest_post">
          <h2><span>Bài Viết Mới</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
            <?php
            	$Top5BaiVietMoi=Top5BaiVietMoi();
				foreach($Top5BaiVietMoi as $row)
				{
			?>
              
              <li>
                <div class="media"> <a href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row['CategoryID']?>&&ArticleID=<?php echo $row['ArticleID']?>" class="media-left"> <img alt="" src="upload/<?php echo $row['Img']?>"> </a>
                  <div class="media-body">
                   <a href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row['CategoryID']?>&&ArticleID=<?php echo $row['ArticleID']?>" class="catg_title">
				   		<?php echo $row['Title']?>
                   </a> </div>
                </div>
              </li>
              <?php } ?>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>