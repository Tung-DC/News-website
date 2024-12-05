<ul id="ticker01" class="news_sticker">
            <?php
            	$Top10BaiVietMoi=Top10BaiVietMoi();
				foreach($Top10BaiVietMoi as $row)
				{
			?>
            <li><a href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row['CategoryID']?>&&ArticleID=<?php echo $row['ArticleID']?>"><img src="upload/<?php echo $row['Img']?>" alt=""><?php echo $row['Title']?></a></li>
            
            <?php 
				}
			?>
</ul>