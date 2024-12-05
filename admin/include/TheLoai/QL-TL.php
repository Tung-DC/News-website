<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Quản Lý <small>danh mục</small>
                        </h1>
                    </div>
</div> 
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php if($_SESSION['quyenhan']=='1'){?>
                            	<a href="#BtnThemTL" class="btn btn-default ">Thêm</a>
                             <?php }?>   
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th>CategoryID</th>
                                            <th>CategoryName</th>
                                            <?php if($_SESSION['quyenhan']=='1'){?>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <?php }?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                        	$them_bv_theloai=them_bv_theloai();
											foreach($them_bv_theloai as $row)
											{	if($_SESSION['quyenhan']=='1'){
													echo "
														<tr class='gradeU'>
															<td>".$row['CategoryID']."</td>
															<td>".$row['CategoryName']."</td>
															
															<td><a href='?ADpage=Sua-TL&&CategoryID=".$row['CategoryID']."'>edit</a></td>
															<td><a href='?ADpage=Xoa-TL&&CategoryID=".$row['CategoryID']."' onclick='return deleteAction();'>delete</a></td>
														</tr>
													";
												}
												else 
													{
														echo "
														<tr class='gradeU'>
															<td>".$row['CategoryID']."</td>
															<td>".$row['CategoryName']."</td>
															
														</tr>
													";
													}
												
												
											}
										
										?>
                                    	
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
       <br>
       
       <br >
       <br>
       <i id="BtnThemTL"></i>  
        <?php if($_SESSION['quyenhan']=='1'){?>       
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Thêm danh mục
                        </div>
                        <div class="panel-body">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                        
                                            <label>Tên danh mục</label>
                                            <input class="form-control" name="danhmuc"  required>
                                           
                                        </div> 
                                        <div class="form-group">
                                        	 <button class="btn btn-info " name="BtnThemTL"  >Thêm</button>
                                        </div>
                                 </form>
                            </div>
                            </div>
</div><!--row -->                      
                <?php }?>   
                
                <?php
                            	if(isset($_POST['BtnThemTL']))
								{
									$tendanhmuc=$_POST['danhmuc'];
									THEM_TL($tendanhmuc);
									echo"<script>alert('Thêm Thành Công!'); window.location='index.php?ADpage=QL-TL'</script>";
								}
							
							?>