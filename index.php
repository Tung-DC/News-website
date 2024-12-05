<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Boostrap/css/bootstrap.min.css"/>
<title>NewsFeed</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"><!-- phải có file này mới dùng được boostrap--> 
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<?php
	
	include 'config.php';
	include 'Process_db.php';
	date_default_timezone_set('Asia/Ho_Chi_Minh'); 
?>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container-fluid ">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="?page=lien-he">Contact</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <p><?php echo date('l')?>, <?php echo date('d - m - Y')?> </p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.php" class="logo"><img src="images/logo.jpg" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="../images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          
           <?php include('include/TrangChu/DanhMuc.php'); 		  ?>
			<li><a href="?page=lien-he">Contact Us</a></li>
        </ul>
      </div>
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Bài Viết Mới</span>
          <?php include('include/TrangChu/TopBaiVietMoi.php'); 
		  ?>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8" >
        <div class="left_content">
          		<!-- content left--->
                
             <?php 
							if(isset($_GET['page'])){$page=$_GET['page'];}else{$page="";}
							switch($page)
								{

								case "list-bai-viet":
									include("include/list-bai-viet.php");
								break;
								
								case "chi-tiet-bai-viet":
									include("include/chi-tiet-bai-viet.php");
								break;
								case "lien-he":
									include("include/Lien-He.php");
								break;
								default:
									include("include/home.php");
									
								}
			?>
            
           
        </div><!-- End content-left -->
      </div><!-- col-md-8 -->
      
      <div class="col-lg-4 col-md-4 col-sm-4"><!-- content left -->
        <aside class="right_content">
        <!-- Lastest Post --->
        	<?php include('include/TrangChu/BaiVietMoi_left.php') ?>
        <!-- END Lastest Post -->
         <!-- Popular Post --> 
         <?php include('include/TrangChu/BaiVietNoiBat.php') ?>
         <!-- END Popular Post -->
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              <li role="presentation"><a href="#" aria-controls="profile" role="tab" data-toggle="tab">Img</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                 
       <?php           $category=category();
		foreach($category as $row)
		{
?>
			<li class="cat-item"><a href="?page=list-bai-viet&&CategoryID=<?php echo $row['CategoryID']?>"><?php echo $row['CategoryName']?></a></li>
				
          	
          
          <?php }
		  ?>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              
            </div>
          </div>
          

        </aside>
      </div>
    </div> <!--  content-right-->
  </section>
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>Map</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61348.69676264504!2d108.16260715279786!3d16.05024985639914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219e9249a6a39%3A0x872683198bf59a0f!2zQsOhbyDEkOG6oWkgxJBvw6BuIEvhur90!5e0!3m2!1svi!2s!4v1511332335101" width="auto" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Categories</h2>
            <ul class="tag_nav">
              
              <?php 

		$category=category();
		foreach($category as $row)
		{
?>
			<li><a href="?page=list-bai-viet&&CategoryID=<?php echo $row['CategoryID']?>"><?php echo $row['CategoryName']?></a></li>	
          	
          
          <?php }
		  ?>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>
Working time:24/7  </p>
            <address>
            	Street: 435 Âu Cơ Đà Nẵng Việt Name,Phone: 123-326-789 Fax: 123-546-567
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; <?php echo date('Y')?> <a href="index.php">NewsFeed</a></p>
      <p class="developer">Developed By Wpfreeware</p>
    </div>
  </footer>
</div>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>
	
				
           
					  
            
    	
    
