
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Thêm <small>bài viết</small>
                        </h1>
                    </div>
</div> 
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    <form  method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label>Tiêu Đề</label>
                                            <input class="form-control"   required="required" placeholder="Nhập Tiêu Đề" name="tieude">
                                        </div>
                                        <div class="form-group">
                                            <label>Mô tả ngắn</label>
                                            <input class="form-control"   maxlength="300"  required="required" placeholder="Mô tả ngắn" name="mota">
                                        </div>
                                        <div class="form-group ">
                                            <label>Nội dung</label>
                                            <textarea class="form-control"    id="content"  rows="20" name="noidung"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Thể Loại</label>
                                            <select class="form-control" name="theloai">
                                                <?php
                                                	$them_bv_theloai=them_bv_theloai();
													foreach($them_bv_theloai as $row)
													{
														echo "
															<option value='".$row['CategoryID']."'>
																".$row['CategoryName']."
															</option>
														";
													}
												?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ảnh Đại Diện</label>
                                            <input class="form-control" required="required" type="file" placeholder="Enter text" name="image_upload">
                                        </div>
                                        <?php 
											if($_SESSION['quyenhan']=='1'){
												?>
                                        <div class="form-group">
                                            <label>Popular</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="Popular" id="optionsRadiosInline1" value="0" checked="">No
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="Popular" id="optionsRadiosInline2" value="1">
                                                Yes
                                            </label>
                                            
                                        </div>
                                                <?php
													
											}
											//else
												//$Popular='0';
										?>
                                        	
										
                                        <div class="form-group">
                                        	<button class="btn btn-info" name="BtnThemBV">Thêm Bài Viết</button>
                                            <button class="btn btn-info" type="reset" >Reset</button>
                                        </div>
                                     </form>
                                     <?php
									 		
											
                                     		if(isset($_POST['BtnThemBV']))
											{   $tieude=$_POST['tieude'];
												$mota=$_POST['mota'];
												$noidung=$_POST['noidung'];
												$theloai=$_POST['theloai'];
												$tacgia=$_SESSION["UserID"]; 
												if($_SESSION['quyenhan']=='1')
												{
													$Popular=$_POST['Popular'];
												}
												else
													$Popular='0';
												
												
												if($_FILES["image_upload"]["name"])
												{
													$image_name=$_FILES["image_upload"]["name"];
													$image_path=$_FILES["image_upload"]["tmp_name"];
													$new_image_path="../upload/".$image_name;
													$image_upload=move_uploaded_file($image_path, $new_image_path);
													 //khai báo thuộc tính 'enctype' chỗ form mới chạy được! 
												}
												$today=date("d-m-Y");//ham lay ngay hien tai
												$time=date('H:i:s');
												
												 if($_SESSION['quyenhan']=='1')
												 	$trangthai=1;
												 else 
													$trangthai=0;
												Them_bv($tieude,$noidung,$image_name,$today,$time,$theloai,$tacgia,$trangthai,$Popular,$mota);
												echo"<script>alert('Thêm Thành Công !'); window.location='index.php?ADpage=QL-BV'</script>";
											}
									 
									 ?>
                                     </div><!-- col-lg-8--->
                                    </div>   <!--row -->
                                    </div>
                                    </div>
                                    </div><!-- col-lg-12 --->
                                    </div><!-- row --->
                                   