<?php ob_start();
	include "../config.php";
	include "function.php";
	include "check-login.php";
	 date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<script>
	function deleteAction(){
		return confirm("Bạn có muốn xóa mục này");
		} //để bắt sự kiện onclick
	function edit(){
		return confirm("Bạn có sửa mục này");
		}	//để bắt sự kiện onclick
	function status(){
		return confirm("Bạn có thay đổi trạng thái này");
		}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NewsFeed</title>
	 <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>

<body>
 <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="fa fa-user"></i> <strong>Tin Tức</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
                <?php if($_SESSION['quyenhan']=='1'){
					?>
                <li class="dropdown">
                    <a class="dropdown-toggle"  href="?ADpage=QL-LH" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> 
                    </a>
                    
                    <!-- /.dropdown-alerts -->
                </li>
                <?php }?>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="?ADpage=TT-TT"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                         <li><a href="?ADpage=Doi-MK"><i class="fa fa-user fa-fw"></i>Đổi Mật Khẩu</a>
                        </li
                        ><li class="divider"></li>
                        <li><a href="?ADpage=Log-out"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    
                    
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Bài Viết<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                              <a href="?ADpage=Them-BV">Thêm Bài Viết</a>
                            </li>
                            <li>
                              <a href="?ADpage=QL-BV">Quản Lí Bài Viết</a>
                            </li>
                           <?php 
								if($_SESSION['quyenhan']=='1')
									{
										?>
											<li>
                                              <a href="?ADpage=D-BV">Bài Viết Chờ Duyệt</a>
                                            </li>
										<?php
									}
							   
						   ?>
                        </ul>
                    </li>
                    
                    
                    <li>
                        <a href="?ADpage=QL-TL"><i class="fa fa-tags"></i>Thể Loại</a>
                    </li>
                    <?php
						
                    	if($_SESSION['quyenhan']=='1')
						{
							?>
                                <li>
                                    <a href="?ADpage=QL-TG"><i class="fa fa-user"></i>Tác Giả</a>
                                </li>
                            <?php
						}
					?>
                    <?php
						
                    	if($_SESSION['quyenhan']=='1')
						{
							?>
                                <li>
                                    <a href="?ADpage=QL-LH"><i class="fa fa-fw fa-file"></i>Liên Hệ</a>
                                </li>
                            <?php
						}
					?>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <?php 
							if(isset($_GET['ADpage'])){$ADpage=$_GET['ADpage'];}else{$ADpage="";}
							switch($ADpage)
								{
								
								//QL BV
								case "Them-BV":
									include("include/BaiViet/Them-BV.php"); //file include cùng cấp với index của admin
								break;
								case "Sua-BV":
									include("include/BaiViet/Sua-BV.php");
								break;
								case "QL-BV":
									include("include/BaiViet/QL-BV.php");
								break;
								case "D-BV":
									include("include/BaiViet/D-BV.php");
								break;
								case "XuLi-D":
									include("include/BaiViet/XuLi-D.php");
								break;
								case "Xoa-BV":
									include("include/BaiViet/Xoa-BV.php");
								break;
								case "Sua-Popular":
									include("include/BaiViet/Sua-Popular.php");
								break;
								
								
								//thể loại
								case "QL-TL":
									include("include/TheLoai/QL-TL.php");
								break;
								case "Sua-TL":
									include("include/TheLoai/Sua-TL.php");
								break;
								case "Xoa-TL":
									include("include/TheLoai/Xoa-TL.php");
								break;
								//Tac gia
								case "QL-TG":
									include("include/TacGia/QL-TG.php");
								break;
								case "Them-TG":
									include("include/TacGia/Them-TG.php");
								break;
								case "Sua-TG":
									include("include/TacGia/Sua-TG.php");
								break;
								case "Xoa-TG":
									include("include/TacGia/Xoa-TG.php");
								break;
								//taikhoan
								case "TT-TT":
									include("include/TaiKhoan/TT-TT.php");
								break;
								case "Sua-TT":
									include("include/TaiKhoan/Sua-TT.php");
								break;
								case "Doi-MK":
									include("include/TaiKhoan/Doi-MK.php");
								break;
								//Lien He
								case "QL-LH":
									include("include/LienHe/QL-LH.php");
								break;
								case "DD-LH":
									include("include/LienHe/DD-LH.php");
								break;
								case "Xoa-LH":
									include("include/LienHe/Xoa-LH.php");
								break;
								//dang xuat
								case "Log-out":
									include("logout.php");
								break;
								
								default:
									include("include/BaiViet/QL-BV.php"); 
									
								}
			?>
			
		
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
</div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    <script src="tinymce/js/tinymce/tinymce.js"></script>
    
 	<script type="text/javascript">
				  tinymce.init({
					selector: '#content',
					theme: 'modern',
					
					plugins: [
					  'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
					  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
					  'save table contextmenu directionality emoticons template paste textcolor jbimages'
					],
					toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons jbimages',
					relative_urls: false
				  });
				  
				  </script>

	
   
</body>
</html>

<?php
	ob_end_flush();
?>