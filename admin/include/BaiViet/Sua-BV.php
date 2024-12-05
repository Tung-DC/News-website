<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Sửa <small>bài viết</small>
                        </h1>
                    </div>
</div> 

<?php
	
	$ArticleID=$_GET['ArticleID'];
	$Article=BV_SUA_BV($ArticleID);
	$row=$Article->fetch();
	
?>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    <form role="form" method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label>Tiêu Đề</label>
                                            <input class="form-control" required placeholder="Nhập Tiêu Đề" name="tieude" 
                                            value="<?php echo $row['Title'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Mô Tả Ngắn</label>
                                            <input class="form-control" required placeholder="Nhập Mô Tả"  maxlength="43"name="mota" 
                                            value="<?php echo $row['Description'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nội dung</label>
                                            <textarea class="form-control"  id="content" required rows="20" name="noidung">
                                            	<?php echo $row['Content']?>
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Thể Loại</label>
                                            <select class="form-control" name="theloai">
                                                <?php
                                                	GetCategory($row['CategoryID']);
													
													
												?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ảnh Đại Diện</label>
                                            <input  type="file" name="image_upload">							 																	 											<input type="hidden" name="anh_mo_ta" value="<?php echo $row['Img']?>"  >
                                        </div>
                                        <div class="form-group">
                                        	<button class="btn btn-info" name="BtnSuaBV" onclick='return edit()'>Sửa Bài Viết</button>
                                            <button class="btn btn-info" type="reset" >Reset</button>
                                        </div>
                                     </form>
                                     <?php
                                     if(isset($_POST['BtnSuaBV']))
										{   $tieude=$_POST['tieude'];
											$noidung=$_POST['noidung'];
											$theloai=$_POST['theloai'];
											$mota=$_POST['mota'];
											if($_FILES["image_upload"]["name"])
											{
												$image_name=$_FILES["image_upload"]["name"];
												$image_path=$_FILES["image_upload"]["tmp_name"];
												$new_image_path="../upload/".$image_name;
												$image_upload=move_uploaded_file($image_path, $new_image_path);
												
											}
											else {
												$image_name=$_POST["anh_mo_ta"];
												}
											SUA_BV($tieude,$noidung,$theloai,$image_name,$ArticleID,$mota);
											echo "<script>window.location='index.php?ADpage=QL-BV'</script>";
										}
									 
									 ?>
                                     </div><!-- col-lg-8--->
                                    </div>   <!--row -->
                                    </div>
                                    </div>
                                    </div><!-- col-lg-12 --->
                                    </div><!-- row --->
                                   