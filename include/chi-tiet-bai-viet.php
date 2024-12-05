<?php
	$CategoryID=$_GET['CategoryID'];
	$category2=category2($CategoryID);
	$row_category2=$category2->fetch();
	
		$ArticleID=$_GET['ArticleID'];  //lay tham so  ArticleID tren duong link web
        $ChiTietBaiViet=ChiTietBaiViet($ArticleID);  //truyen tham so  vao function article trong file Process_db.php
    	$row_ChiTietBaiViet=$ChiTietBaiViet->fetch();
   
?>
<div class="col-md-12">
<ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="?page=list-bai-viet&&CategoryID=<?php echo $row_category2['CategoryID']?>"><?php echo $row_category2['CategoryName']?></a></li>
              <li class="active"><?php echo $row_ChiTietBaiViet['Title']?></li>
</ol>
<h1><?php echo $row_ChiTietBaiViet['Title']?></h1>
            <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i><?php echo $row_ChiTietBaiViet['Name']?></a> <span><i class="fa fa-calendar"></i><?php echo $row_ChiTietBaiViet['Day'];echo " "; echo $row_ChiTietBaiViet['Time']?></span> <a href="#"><i class="fa fa-tags"></i><?php echo $row_category2['CategoryName']?></a> </div>
            <div class="single_page_content">  <!-- content bai viet -->
              	<?php echo $row_ChiTietBaiViet['Content']?>
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
             <?php
    	
		$TinLienQuan=TinLienQuan($CategoryID,$ArticleID);
		
			
		
	?>
            <div class="related_post">
              <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">
              <?php foreach($TinLienQuan as $row)
				{	echo "<a href='?page=chi-tiet-bai-viet&&ArticleID=".$row['ArticleID']."&&CategoryID=".$row['CategoryID']."' > ";			
			
			?>
                <li>
                  <div class="media"> <a class="media-left" href="?page=chi-tiet-bai-viet&&ArticleID=<?php echo $row['ArticleID'] ?>&&CategoryID=<?php echo $row['CategoryID'] ?> "> <img src="upload/<?php echo $row['Img'] ?>" alt="" > </a>
                    <div class="media-body"> <a class="catg_title" href="?page=chi-tiet-bai-viet&&ArticleID=<?php echo $row['ArticleID'] ?>&&CategoryID=<?php echo $row['CategoryID'] ?> "> <?php echo $row['Title']?></a> </div>
                  </div>
                </li>
                <?php 	}
	?>	
              </ul>
            </div><!-- Related post -->
          
</div>